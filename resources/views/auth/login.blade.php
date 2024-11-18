@extends('components.layouts.auth')
@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">{{__('Login')}}</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="{{route('handleLogin')}}" method="POST">
                        @csrf
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span>
                                <input type="text" name="email" value="{{old(key: 'email')}}" placeholder="{{__('Email')}}" required>
                            </div>
                            @error('email')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" name="password" value="{{old('password')}}" placeholder="{{__('Enter your Password')}}" required>
                                <button class="btn bg-white text-muted">
                                    <span class="far fa-eye-slash"></span>
                                </button>
                            </div>
                            @error('password')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-3">{{__('Login')}}</button>
                        <div class="text-center pt-4 text-muted">{{__("Don't have an account?")}} <a href="{{route('register')}}">{{__('Sign Up')}}</a> </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
