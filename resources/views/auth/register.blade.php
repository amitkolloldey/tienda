@extends('front.layout.template')
@section('title')
    Register
@endsection

@section('bodyclass')
    tienda_login
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-heading">
                    <span class="page-heading-title2">Create An Account</span>
                </h2>
            </div>
            <div class="col-md-offset-3 col-md-6">

                <form method="POST" action="{{ route('register') }}" class="box-authentication">
                    @csrf
                    <h3>Create an account</h3>
                    <div class="form-group row">
                        <label for="name"
                               class="col-sm-12 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('Email')
                        }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-12 col-form-label text-md-right">{{ __
                        ('Confirm Password')
                        }}</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-12">
                            <button class="button"><i class="fa fa-lock"></i> Sign Up</button>
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-right"><a href="{{route('login')}}" class="forgot-pass">Login</a></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
