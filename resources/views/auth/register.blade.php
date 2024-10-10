@extends('components.layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Register</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="{{route('handleRegister')}}" method="POST">
                        @csrf
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span>
                                <input type="text" placeholder="Username" value="{{old('name')}}" name="name" required>
                            </div>
                        </div>
                        @error('name')
                        <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                        @enderror

                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span>
                                <input type="text" placeholder="Email" value="{{old(key: 'email')}}" name="email" required>
                            </div>
                        </div>
                        @error('email')
                        <p class="help-block text-danger">{{ ' * ' . $message }}</>
                            @enderror
                        <div class="form-group py-1 pb-2">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" placeholder="Enter your Password" value="{{old('password')}}" name="password" required>
                                <button type="submit" class="btn bg-white text-muted">
                                    <span class="far fa-eye-slash"></span>
                                </button>
                            </div>
                        </div>
                        @error('password')
                        <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                        @enderror
                        <div class="form-group py-1 pb-2">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" placeholder="Confirm Password" value="{{old(key: 'confirm_password')}}" name="confirm_password" required>
                                <button type="submit" class="btn bg-white text-muted">
                                    <span class="far fa-eye-slash"></span>
                                </button>
                            </div>
                        </div>
                        @error('confirm_password')
                        <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
                        <div class="text-center pt-4 text-muted">
                            Have an account?
                            <a href="{{route('login')}}">Log in</a>
                        </div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection