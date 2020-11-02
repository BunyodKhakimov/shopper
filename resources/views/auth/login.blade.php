@extends('layouts.main')

@section('content')

<!--form-->

	<section id="form">
		<div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-1">

                    <!--login form-->

                    <div class="login-form">
                        <h2>Login to your account</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input id="email" type="email" placeholder="E-mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <span>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                            </span>

                            <button type="submit" class="btn btn-default">
                                Login
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>

                    <!--/login form-->
                
                </div>

                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>

                <div class="col-sm-4">
                    
                    <!--sign up form-->

                    <div class="signup-form">
                        <h2>New User Signup!</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input id="email" type="email" placeholder="E-mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                            

                            <button type="submit" class="btn btn-default">
                                Signup
                            </button>
                        </form>
                    </div>

                    <!--/sign up form-->

                </div>
            </div>
		</div>
	</section>

<!--/form-->

@endsection
