@extends('layouts.app-auth')

@section('content')
    <div class="col-12">
        <div class="container-fluid">
            <div class="card border-0" style="margin: 50px 0px; background-color: #D9D9D9">
                <div class="card-header">
                    <h1 class="fw-bold mt-2" style="font-size: 40px;">Check Your Email Address</h1>
                </div>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <div class="card-body flex-column align-items-center d-flex p-4">
                    <form class="col-5 d-flex flex-column align-items-center" method="POST" action="{{ route('forgot.password.create.token', $id) }}">
                        @csrf
                        <div class="col-12 d-flex flex-column align-items-center mb-3">
                            <label for="my_token" class="form-label">OTP</label>
                            <input type="number" class="form-control p-3 text-center" style="background-color: #F2F2F2" placeholder="ENTER CODE" name="my_token" id="my_token">
                        </div>
                        <div class="col-12 d-flex flex-column mb-3">
                            <button type="submit" class="btn text-white p-3" style="background-color: #21E1E1">Submit</button>
                        </div>
                    </form>

                    <h6>Please check your email to confirm <span class="text-danger" id="timer"></span></h6>
                    <form id="resend" style="display: none" method="POST" action="{{ route('resend.forgot.password.confirm.email') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to resend') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.getElementById('timer').innerHTML =
        01 + ":" + 00;
        startTimer();

        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if(s==59){m=m-1}
            if(m<0){m=0; s=0}
            if(s==0){
                let resend = document.getElementById('resend').style.display = "inline";
                // fetch('{{route("auto.reset.token", $id)}}')
            }

            document.getElementById('timer').innerHTML =
            m + ":" + s;
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
            if (sec < 0) {sec = "59"};
            return sec;
        }
    </script>
@endpush
