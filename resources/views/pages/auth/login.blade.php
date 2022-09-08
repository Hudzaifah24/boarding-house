@extends('layouts.app-auth')

@section('content')
    <section class="col-12">
        <div class="container-fluid">
            <div class="d-flex justify-content-between" style="margin: 50px 0px">
                <div class="col-6 px-4">
                    <img class="img-fluid" src="{{ asset('assets/undraw_home_settings_re_pkya.svg') }}" alt="login img">
                </div>
                <div class="col-5">
                    <form class="d-flex flex-column align-items-center p-4" method="POST" action="{{ route('login-process') }}">
                        @csrf
                        <h1 class="fw-bold mb-5">Login</h1>
                        <div class="col-12 d-flex flex-column mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex flex-column mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Password" name="password" id="password" value="{{ old('password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-column">
                            <button type="submit" class="btn text-white p-3" style="background-color: #21E1E1">Sign In</button>
                            <div class="d-flex mt-3">
                                <a href="{{ route('forgot.password') }}" class="mx-auto">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
