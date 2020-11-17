@extends('layouts.app')

@section('content')

<div class="popup_dn_new ra">
    <h1 class="logo_po title-po">
        <!-- {{ __('Login') }} -->
        <img src="/assets/login/angry-cat-working.png" alt="avarta">
    </h1>
    <div class="all_nd_po">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="hideall">                                
                <span class="img_po">
                    <img src="/assets/login/img_av1.png" alt="img po">
                </span>

                <div class=" form-group form-flex">
                    <label for="email" class="form-po-label">{{ __('Name') }}</label>

                    <div class="form-po-input">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" form-group form-flex">
                    <label for="email" class="form-po-label">Email</label>

                    <div class="form-po-input">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>                        

                <div class="form-group form-flex">
                    <label for="password" class="form-po-label">Password</label>

                    <div class="form-po-input">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group form-flex">
                    <label for="password-confirm" class="form-po-label">Confirm PW</label>

                    <div class="form-po-input">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> 
            </div>        
            <div class="form-group form-flex">
                <button type="submit" class="btn btn-primary form-po-btn">
                    {{ __('Register') }}
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
