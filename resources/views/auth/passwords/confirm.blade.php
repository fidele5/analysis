@extends('layouts.app')

@section('content')
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Password Recovery</h1>
                        <p class="signup-link">{{ __('Please confirm your password before continuing') }}!</p>
                        <form class="text-left" method="POST" action="{{ route('password.confirm') }}">
                            <div class="form">

                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Reset</button>
                                    </div>                                    
                                </div>

                            </div>
                            @if (Route::has('password.request'))
                                <div class="field-wrapper">
                                    <a href="{{ route('password.request') }}" class="forgot-pass-link">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif     
                            </form>                    
                            <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index-2.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="form-image">
                <div class="l-image">
                </div>
            </div>
@endsection
