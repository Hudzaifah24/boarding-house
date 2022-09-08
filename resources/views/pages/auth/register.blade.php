@extends('layouts.app-auth')

@section('content')
    <section class="col-12">
        <div class="container-fluid">
            <div class="d-flex justify-content-between" style="margin: 50px 0px">
                <div class="col-12">
                    <form class="d-flex flex-column align-items-center p-4" method="POST" action="{{ route('auth-register') }}">
                        @csrf
                        <h1 class="fw-bold mb-5">Register</h1>
                        <div class="col-12 d-flex justify-content-between gap-4 mb-4">
                            <div class="col">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Your Name" name="name" id="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="number" class="form-control  @error('phone_number') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Phone Number" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between gap-4 mb-5">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Password" name="password" id="password"">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control p-3" style="background-color: #F2F2F2" placeholder="Password Confirmation" name="password_confirmation" id="password_confirmation">
                            </div>
                        </div>
                        <div class="col-5 d-flex flex-column">
                            <button type="submit" class="btn text-white p-3" style="background-color: #21E1E1">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
