@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                            </div>
                                <form method="POST" class="user" action="{{ route('register') }}">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="name" type="text" placeholder="{{ __('Name') }}" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>   

                                <div class="col-sm-6">
                                           <input id="celular" type="text" placeholder="{{ __('celular') }}" class="form-control form-control-user @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>

                                        @error('celular')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    

                                        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}"  class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                    </div>
                                    <div class="col-sm-6">
                                          <input id="password-confirm"  placeholder="{{ __('Confirm Password') }}" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password">
                                            </div>


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Register') }}
                                    </button>

                               
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> {{ __('google') }}
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> {{ __('facebook') }}
                                </a>
                            <hr>
                            <div class="text-center">

                                @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                            </div>
                            <div class="text-center">
                                <a class="btn btn-link"" href="{{ route('login') }}">{{ __('Already registered?') }} </a>

                            </div>                                 </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection
