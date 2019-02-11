@extends('layouts.app')

@section('content')

<div class="py-4 mt-4 clearfix"></div>

<section class="section1">
    <div class="container clearfix my-4">
        <div class="row">
            <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <h4 class="title">
                        <span>Login Form</span>
                        </h4>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
            
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
            
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary primary-bg">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>

                        <img class="img-fluid" src="img/build.png">
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="he-wrap tpl2">
                            <img src="img/banner-side.png" alt="" class="img-responsive">
                                <div class="he-view">
                                    <div class="bg a0" data-animate="fadeIn">
                                    <div class="center-bar">
                                        <a href="#" class="twitter a0" data-animate="elasticInDown"></a>
                                        <a href="#" class="facebook a1" data-animate="elasticInDown"></a>
                                        <a href="#" class="google a2" data-animate="elasticInDown"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('inc.footer')

@endsection
