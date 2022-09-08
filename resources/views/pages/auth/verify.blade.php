@extends('layouts.app-auth')

@section('content')
    <div class="col-12">
        <div class="container-fluid">
            <div class="card border-0" style="margin: 50px 0px; background-color: #D9D9D9">
                <div class="card-header">
                    <h1 class="fw-bold mt-2" style="font-size: 40px;">Verify Your Email Address</h1>
                </div>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <div class="card-body p-4">
                    <h6>Before proceeding, please check your email for a verification link. If you did not receive the email,</h6>
                    <form class="d-inline" method="POST" action="{{ route('verified.email') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to resend') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
