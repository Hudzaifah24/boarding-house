@extends('layouts.app-auth')

@section('content')
    <section class="col-12">
        <div class="container-fluid">
            <div class="d-flex justify-content-between" style="margin: 50px 0px">
                <div class="col-6 px-4">
                    <img class="img-fluid" src="{{ asset('assets/undraw_smart_home_re_orvn.svg') }}" alt="login img">
                </div>
                <div class="col-5">
                    <form class="d-flex flex-column align-items-center p-4" method="POST" action="{{ route('reset.password.process') }}">
                        @csrf
                        <h1 class="fw-bold mb-5">Change Your Password</h1>
                        <div class="col-12 d-flex flex-column mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="hidden" value="{{ $email }}" name="email">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Password" name="password" id="password" value="{{ old('password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex flex-column mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control p-3" style="background-color: #F2F2F2" placeholder="Password Confirmation" name="password_confirmation" id="password_confirmation">
                        </div>
                        <div class="col-12 d-flex flex-column mt-2">
                            <button type="submit" class="btn text-white p-3" style="background-color: #21E1E1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
