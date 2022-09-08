<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.header')
        <title>SUCCESS</title>
    </head>
    <body>
        <div class="col-12">
            <div class="my-5">
                <div class="col-4 m-auto mb-3 d-flex justify-content-center">
                    <img src="{{ asset('assets/undraw_done_re_oak4.svg') }}" class="img-fluid" alt="gambar done">
                </div>
                <div class="col-4 m-auto mb-3">
                    <h1 class="fw-bold text-center">SUCCESS!</h1>
                </div>
                <div class="col-3 m-auto">
                    <a href="{{ route('home') }}" class="btn btn-lg active-a d-flex justify-content-center">Back to Home</a>
                </div>
            </div>
        </div>
    </body>
</html>
