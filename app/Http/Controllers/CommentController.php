<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\NewCommentNotification;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $post->comments()->create([
            'user_id' => Auth::id(),
            'post_id' => $post->id,
            'comment' => $request->comment,
        ]);
        $user = User::findOrFail($post->user_id);
        $user->notify(new NewCommentNotification($post));
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        if(Auth::id() !== $comment->user_id){
            abort(403);
        }
        $comment->delete();
        return back();
    }
    public function notify(){
        $notifications = auth()->user()->unReadnotifications;
        return view('auth.notify', compact('notifications'));
    }
    public function readNotify(string $id){
        $notification = Auth::user()->unReadNotifications->where('id', $id)->first();
        if($notification){

            $notification->markAsRead();
        }
        return redirect()->back();
    }
    public function readAllNotify(){
        auth()->user()->unReadNotifications->markAsRead();
        return redirect()->back();
    }
}
