@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nomor" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="nomor" type="nomor" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" required autocomplete="nomor" autofocus>

                                @error('nomor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('captcha') }}</label>

                            <div class="col-md-6">
                            <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" id="captchaCode" alt="" class="captcha">
                   
                                <a rel="nofollow" href="javascript:;" onclick="document.getElementById('captchaCode').src='captcha/flat?'+Math.random()" class="refresh">
                                                        
                                    <button type="button" class="btn btn-info btn-refresh">Refresh</button>
                                </a>
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <div class="offset-md-4 col-md-6">
                                <input id="captcha" type="captcha" class="form-control @error('captcha') is-invalid @enderror" name="captcha" value="{{ old('captcha') }}" required autocomplete="captcha" autofocus>

                                @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script tpye="text/javascript">
    $('#regen-captcha').on('click', function(e){
        e.preventDefault();

        var anchor =$(this);
        var captcha = anchor.prev('img');

        $.ajax((
            type:"GET",
            url: "/ajax_regen_captcha",
        }).done(function (msg){
            captcha.attr('src', msg);
        ));
    });
    </script>

@endsection
