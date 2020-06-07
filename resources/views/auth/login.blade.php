@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="text-center">
                  <img src="https://image.flaticon.com/icons/png/512/124/124713.png" alt="" width="120" height="120"class="img-circle left" >
                </div>
                <br>
                <div class="mx-auto col-md-14">
                    <label class="col-md-18 col-form-label text-md-center text-default">Sing In</label><br>
                    <label >it's time to assist an event</label>
               </div>

                <div class="alert alert-default text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
 <div class="form-group col-md-14 ">
                               <label for="email" class="col-md-4 col-form-label text-md-left text-danger">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6 mx-auto">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>


                        <div class="form-group col-md-14">
                            <label for="password" class="col-md-4 col-form-label text-md-left text-danger">{{ __('Password') }}</label>

                            <div class="col-md-6 mx-auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-14 offset-md-4 mx-auto">
                                <button type="submit" class="btn btn-danger btn-block ">
                                    {{ __('Login') }}
                                </button>
                                <div class="col-md-14 offset-md-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-md-left" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                              </div>
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


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
