<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StoreUpdatePostRequest;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Post::withTrashed()->findOrFail(1)->restore();

        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create')
            ->with(['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $image = $this->uploadImage($request->file('image'));
        Post::create([
            'user_id' => 1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'context' => $request->context,
            'image' => $image,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = $this->findPost($id);
        $resent_posts = Post::where('id', '!=', $post->id)->limit(5)->get();
        return view('posts.show', compact('post', 'resent_posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = $this->findPost($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdatePostRequest $request, string $id)
    {
        $post = $this->findPost($id);

        $post->title = $request->title;
        $post->short_content = $request->short_content;
        $post->context = $request->context;

        if ($request->hasFile('image')) {
            $this->deleteImage($post->image);
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $post->image = $image->storeAs('uploads', $fileName, 'public');
        }

        $post->save();

        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = $this->findPost($id);
        $this->deleteImage($post->image);
        $post->delete();

        return redirect()->route('posts.index');
    }
    public function uploadImage($imageName)
    {

        $fileName = time() . '.' . $imageName->getClientOriginalExtension();
        $imagePath = $imageName->storeAs('uploads', $fileName, 'public');
        return $imagePath;
    }
    public function findPost($post_id)
    {

        $post = Post::findOrFail($post_id);
        return $post;
    }
    public function deleteImage($image)
    {
        if ($image) {
            @unlink(storage_path('app/public/' . $image));
        }
    }
}
