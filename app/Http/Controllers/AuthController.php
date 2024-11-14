<?php

namespace App\Http\Controllers;

use App\Mail\SendSmsToMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreUserLoginRequest;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }
    public function handleRegister(StoreAuthRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->verification_token = uniqid();
        $user->password = bcrypt($request->password);
        $user->save();

        Mail::to($user->email)->send(new SendSmsToMail($user));
        return redirect()->route('login');
    }
    public function loginForm()
    {
        return view('auth.login');
    }
    public function handleLogin(StoreUserLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            if($user->email_verified_at == null){
                abort(403);
            }
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('home');
        }
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function verify(Request $request){
        $user = User::where('verification_token', $request->token)->first();
        if(!$user){
            abort(404);
        }
        $user->email_verified_at = now();
        $user->save();
        return redirect()->route('login');
    }
}
