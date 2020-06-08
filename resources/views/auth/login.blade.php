@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="col-lg-12 text-center">
            <div>
                <img src="https://image.flaticon.com/icons/png/512/124/124713.png" alt="" width="120" height="120"class="img-circle left" >
            </div>

            <div>
                <label>Events App</label>
            </div>
        </div>

        <div class="col-lg-12">
            <label class="font-weight-bold h5">Sing In</label>
        </div>

        <div class="col-lg-12">
            <label>It's time to assist an event</label>
        </div>


            <form method="POST" action="{{ route('login') }}" class="row">
                 @csrf

                 <div class="col-lg-12">
                      <label for="email" class="text-md-left text-danger ml-3">{{ __('E-Mail Address') }}</label>

                      <input placeholder="Juanito@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                 </div>

                 <div class="col-lg-12">
                    <label for="password" class="text-md-left text-danger ml-3">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                 </div>

                 <div class="col-lg-12 ml-4">
                    <input class="form-check-input pl-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                 </div>

                 <div class="col-lg-12 mt-4">
                      <button type="submit" class="btn btn-danger btn-block">{{ __('Login') }}
                 </div>

                 <div class="row col-lg-12 text-center mt-4">
                    <div class="col-lg-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-md-left" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}
                            </a>
                         @endif
                    </div>

                    <div class="col-lg-6">
                        <div>
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}">create account</a>
                          @endif
                        </div>
                    </div>
                 </div>
            </form>




    </div>




</div>
@endsection
