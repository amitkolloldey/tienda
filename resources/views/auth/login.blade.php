@extends('front.layout.template')
@section('title')
    Authentication
@endsection

@section('bodyclass')
    tienda_login
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-heading">
                    <span class="page-heading-title2">Authentication</span>
                </h2>
            </div>
            <div class="col-md-offset-3 col-md-6">

                <form method="POST" action="{{ route('login') }}" class="box-authentication">
                    @csrf
                    <h3>Already registered?</h3>
                    <div class="form-group row">
                        <label for="email"
                               class="col-sm-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password')
                        }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                        </div>
                        <div class="col-md-8">
                            <a class="forgot-pass" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-right"><a href="{{route('register')}}" class="forgot-pass">Create An
                                    Account</a></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
