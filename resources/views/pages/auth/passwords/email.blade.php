@extends('layouts.app-auth')

@section('content')
    <div class="col-12">
        <div class="container-fluid">
            <div class="card border-0" style="margin: 50px 0px; background-color: #D9D9D9">
                <div class="card-header">
                    <h1 class="fw-bold mt-2" style="font-size: 40px;">Please Enter Your Email</h1>
                </div>
                <div class="card-body p-4">
                    <form class="d-flex flex-column align-items-center p-4" method="POST" action="{{ route('forgot.password.process') }}">
                        @csrf
                        <div class="col-5 d-flex flex-column align-items-center mb-4">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror p-3" style="background-color: #F2F2F2" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-5 d-flex flex-column">
                            <button type="submit" class="btn text-white p-3" style="background-color: #21E1E1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
