@extends('layouts.app')

@section('people', 'fw-bold')

@section('content')
    <main>
        <section class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <div class="shadow p-3 rounded text-white background-default position-relative">
                        <a href="{{ route('home') }}" class="btn active-a position-absolute">Back</a>
                        <h3 class="m-0 text-center">The are Many More Beauty of Our House</h3>
                    </div>
                    <div class="d-flex justify-content-between gap-2 flex-wrap">
                        <div data-aos="fade-up" class="border-blue background-default mt-5 rounded shadow p-2" style="width: 585px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/house.jpg') }}" alt="house">
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default mt-5 rounded shadow p-2" style="width: 585px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/house.jpg') }}" alt="house">
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default mt-5 rounded shadow p-2" style="width: 585px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/house.jpg') }}" alt="house">
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default mt-5 rounded shadow p-2" style="width: 585px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/house.jpg') }}" alt="house">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
