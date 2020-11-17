@extends('layouts.app')

@section('content')
<div class="popup_dn_new ra">
    <h1 class="logo_po title-po">
        <!-- {{ __('Login') }} -->
        <img src="/assets/login/angry-cat-working.png" alt="avarta">
    </h1>
            

                <div class="all_nd_po">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="hideall">
                                
                        <span class="img_po">
                            <img src="/assets/login/img_av1.png" alt="img po">
                        </span>
                                  
                        <div class=" form-group form-flex">
                            <label for="email" class="form-po-label">Email</label>

                            <div class="form-po-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-flex">
                            <label for="password" class="form-po-label">{{ __('Password') }}</label>

                            <div class="form-po-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-flex justify-end">
                            <div class="form-remember">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>                     

                    </div>  

                    <div class="form-group form-flex">
                        <button type="submit" class="btn btn-primary form-po-btn">
                                {{ __('Login') }}
                            </button>    
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link po-btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif                            
                    </div>
                    

                </form>
               
    </div>
</div>
@endsection

