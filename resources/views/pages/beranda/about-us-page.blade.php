@extends('layouts.app')

@section('aboutus', 'fw-bold')

@section('content')
    <main>
        <section class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <div class="shadow p-3 rounded text-white background-default position-relative">
                        <a href="{{ route('home') }}" class="btn active-a position-absolute">Back</a>
                        <h3 class="m-0 text-center">About Us</h3>
                    </div>
                    <div class="d-flex shadow mt-5" style="background-color: #D9D9D9">
                        <div class="col-6 rounded p-4 d-flex flex-column">
                            <!-- Floor Plan -->
                            <div class="d-flex flex-column mb-3">
                                <p class="fw-bold">DENAH</p>
                                <p>Kota : Jonggol</p>
                                <p>Kabupaten : Bogor</p>
                                <p>Provinsi : Jawa Barat</p>
                                <p>Negara : Indonesia</p>
                            </div>

                            <!-- Specification -->
                            <div class="d-flex flex-column mb-3">
                                <p class="fw-bold">SPESIFIKASI</p>
                                <p>Kondisi : Baik</p>
                                <p>Kerapihan : Baik</p>
                                <p>Kekokohan : Kurang Baik</p>
                            </div>

                            <!-- Socialization -->
                            <div class="d-flex flex-column">
                                <p class="fw-bold">SOSIALISASI</p>
                                <p>Diurus & dihuni oleh : </p>
                                <ul>
                                    <li>Hudzaifah</li>
                                    <li>Daffa</li>
                                    <li>Salman</li>
                                    <li>Adam</li>
                                    <li>Naufal</li>
                                </ul>
                                <p class="m-0">Bayaran (per-bulan x 1 orang) : Wifi : 100k</p>
                            </div>
                        </div>
                        <div class="col-6 rounded p-4 d-flex flex-column">
                            <!-- Facility -->
                            <div class="d-flex flex-column mb-3">
                                <p class="fw-bold">FASILITAS</p>
                                <ul>
                                    <li>Wifi</li>
                                    <li>Listrik</li>
                                    <li>Stopkontak</li>
                                    <li>Mejikom</li>
                                    <li>Alat fitnes</li>
                                    <li>Air minum</li>
                                </ul>
                            </div>

                            <!-- individual -->
                            <div class="d-flex flex-column">
                                <p class="fw-bold">INDIVIDUAL</p>
                                <ul>
                                    <li>Alat cuci</li>
                                    <li>Alat makan</li>
                                    <li>Alat mandi</li>
                                    <li>Alat tidur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
