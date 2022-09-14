@extends('layouts.app')

@section('people', 'fw-bold')

@section('content')
    <main>
        <section class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <div class="shadow p-3 rounded text-white background-default position-relative">
                        <a href="{{ route('home') }}" class="btn active-a position-absolute">Back</a>
                        <h3 class="m-0 text-center">Let's Join With Us</h3>
                    </div>
                    <div class="d-flex justify-content-between gap-2 flex-wrap">
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile.jpeg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile2.jpeg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile3.jpg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile.jpeg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile2.jpeg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="border-blue background-default place-img mt-5 rounded shadow p-2 position-relative" style="width: 379px; height: 465px;">
                            <img class="w-100 h-100" src="{{ asset('assets/profile3.jpg') }}" alt="profile">
                            <div class="people-title position-absolute text-center w-100" style="bottom: 10%">
                                <p class="h4 text-black">Name User</p>
                                <p class="text-white">Prodi User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
