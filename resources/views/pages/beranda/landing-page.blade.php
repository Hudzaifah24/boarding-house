@extends('layouts.app')

@section('home', 'fw-bold')

@section('content')
    <main>
        <section class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5">
                        <p class="paragraph-content">
                            Rumah ku adalah tempat yg paling aku sayangi. karena di sini lah aku dan keluarga ku selalu berasama. Aku sangat menyayangi rumah ku dan keluarga ku.
                        </p>
                        <a href="{{ route('register') }}" class="btn active-a p-3">Get Started</a>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="{{ asset('assets/undraw_best_place_re_lne9.svg') }}" alt="gambar home">
                    </div>
                </div>
            </div>
        </section>

        <section id="peoples" class="col-12" style="padding-top: 70px; padding-bottom: 70px; background-color: #D9D9D9">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <img class="img-fluid" src="{{ asset('assets/undraw_home_cinema_l7yl.svg') }}" alt="gambar home">
                    </div>
                    <div class="col-5">
                        <p class="paragraph-content">
                            Sampai suatu hari aku sedang bertamasya berasama seluruh keluarga ku. kami merencanakan libur kali ini di kampung nenek ku. kami sekeluarga akan pergi meninggalkan rumah.
                        </p>
                        <a href="{{ route('people.page') }}" class="btn active-a p-3">View Peoples</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="photos" class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5">
                        <p class="paragraph-content">
                            Sebelum berangkat ayah ku mengunci pintu dan mengecek semua apakah kondisi rumah baik² saja sebelum kami meninggalkan nya. setelah semua siap kami pun berangkat. aku sedikit sedih untuk meninggalkan rumah ini karena aku menyukai nya.
                        </p>
                        <a href="{{ route('photo.page') }}" class="btn active-a p-3">View Photos</a>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="{{ asset('assets/undraw_sweet_home_dkhr.svg') }}" alt="gambar home">
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="col-12" style="padding-top: 70px; padding-bottom: 70px; background-color: #D9D9D9">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <img class="img-fluid" src="{{ asset('assets/undraw_building_re_xfcm.svg') }}" alt="gambar home">
                    </div>
                    <div class="col-5">
                        <p class="paragraph-content">
                            Tdk terasa beberapa jam beralalu kami sekeluarga akhirnya sampai di rumah nenek. kakek dan nenek menyambut ki dengam hangat dan membantu membawakan barang kami. liburan di rumah kakek dan nenek memang menyenangkan tapi aku rindu di rumah.
                        </p>
                        <a href="{{ route('about.us.page') }}" class="btn active-a p-3">About Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="col-12" style="padding-top: 70px; padding-bottom: 70px">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5">
                        <h4>Kontak :</h4>
                        <h5 class="mt-5">Email : hudz1357@gmail.com</h5>
                        <h5 class="mt-5">Tlp : 081575319184</h5>
                        <h5 class="mt-5">FB : Non Alkohol</h5>
                        <h5 class="mt-5">IG : nga_woer</h5>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="{{ asset('assets/undraw_building_re_xfcm.svg') }}" alt="gambar home">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
