@extends('shared/base')

@section('judul','Home')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('dropdown')
    <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" class="agan" disabled selected hidden>Resep</option>
            <option value='/katalogresep' class="agan">Resep</option>
            <option value='/katalogbahan' class="agan">Bahan</option>
    </select>
@endsection

@section('background_jumbotron')
    background-image: url('assets/img/julian-dik--czl8QNCVKY-unsplash.jpg');
@endsection
@section('judul_jumbotron','MasakYuk')
@section('tagline')
    <h3 class="tagline">Pesan, Masak, Makan</h3>
@endsection

@section('isi_konten')
    <!-- Hubungi Kami  -->
    <section id="about" class="about">

        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Tentang Kami</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <p class="text-justify">
                        Hai! Kami adalah situs web yang menyediakan berbagai jenis resep makanan yang cocok untuk kamu yang ingin hal-hal simpel untuk mengisi perut.
                        <br> Eits, tapi tidak itu saja!
                        <br> Malas keluar? Bingung mencari bahan yang benar? Tidak punya waktu belanja? Tenang aja, kami juga menyiapkan bahan-bahan yang bisa kamu pesan dan kami antarkan segera!
                    </p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="assets/img/WhatsApp Image 2020-11-09 at 23.27.39.jpeg" class="img-about" style="width: 188px;height: 188px;">
                </div>
            </div>
        </div>

    </section>

    <!-- Cara kerja -->
    <section id="portfolio" class="portfolio bg-light pb-4">

        <div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2>Cara Kerjanya?</h2>
                </div>
            </div>

            <div class="row mb-3" style="text-align: center;">
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 15px;">
                                Cari resep yang kamu inginkan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Cocok? Pesan bahannya!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Pilih pengiriman
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Bayar
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-4" style="text-align: center; justify-content: center;">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Tunggu pesananmu diantar
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                MasakYuk
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                MakanYuk
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Kenapa Harus MasakYuk?</h2><br>

                        <div class="hori-timeline " dir="ltr">
                            <ul class="list-inline events">
                                <li class="list-inline-item event-list" style="top: -5px;">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-primary text-primary">1</div>
                                        <h5 class="font-size-16">Tidak Perlu Bingung Lagi!</h5>
                                        <p class="text-muted">
                                            MasakYuk menyediakan berbagai macam resep untuk membantumu menyediakan berbagai hidangan berbeda setiap harinya
                                        </p>
                                        <!-- <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        </div> -->
                                    </div>
                                </li>
                                <li class="list-inline-item event-list" style="top: -28px;">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-success text-success">2</div>
                                        <h5 class="font-size-16">Serba Mudah</h5>
                                        <p class="text-muted">
                                            Dengan menggunakan MasakYuk, Anda dapat memesan dan membayar dengan mudah tanpa perlu keluar rumah
                                        </p>
                                        <!-- <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        </div> -->
                                    </div>
                                </li>
                                <li class="list-inline-item event-list" style="top: -51px;">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-danger text-danger">3</div>
                                        <h5 class="font-size-16">Hemat Waktu</h5>
                                        <p class="text-muted">
                                            Pesan bahan masakan yang Anda inginkan di mana saja dan kapan pun yang Anda inginkan
                                        </p>
                                        <!-- <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        </div> -->
                                    </div>
                                </li>
                                <li class="list-inline-item event-list" style="top: -54px;">
                                    <div class="px-4">
                                        <div class="event-date bg-soft-warning text-warning">4</div>
                                        <h5 class="font-size-16">Semua Nyaman</h5>
                                        <p class="text-muted">
                                            MasakYuk menyediakan berbagai macam resep yang sesuai dengan Anda
                                        </p>
                                        <!-- <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        </div> -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
    

        <!-- bagian resep pilihan -->
        <section id="resep_pilihan" class="portfolio bg-light pb-4">
            <div class="container">
                <div class="row mb-4 pt-4">
                    <div class="col text-left">
                        <h2>Resep Pilihan</h2>
                    </div>
                </div>
                <!-- template resep pilihan -->
                <div class="row justify-content-center" style="margin-left: 55px;">
                    @foreach($resep_pilihan as $rsp)
                        <div class="col-md-4" style="text-align: center; ">

                            <div class="card" style="width:250px;">
                                <a href="/resep/{{$rsp->id_resep}}">
                                    <img class="card-img-top" src="../assets/img/resep/{{$rsp->gambar_resep}}" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{$rsp->judul_resep}}</h5>
                                </div>
                            </div>
                            <br>
                            <!-- <div class="card" style="width:250px;">
                                <a href="">
                                    <img class="card-img-top" src="assets/img/nasi_goreng.jpg" alt="ayam-bakar" style="width:100%;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng Original</h5>
                                </div>
                            </div> -->

                        </div>

                        <!-- <div class="col-md-3" style="text-align: center;">

                            <div class="card" style="width:250px;">
                                <img class="card-img-top" src="assets/img/nasi_goreng_merah.jpg" alt="ayam-bakar" style="width:100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng Merah</h5>
                                </div>
                            </div>

                            <br>
                            <div class="card" style="width:250px;">
                                <img class="card-img-top" src="assets/img/nasi_mawut.jpg" alt="ayam-bakar" style="width:100%; ">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng Mawut</h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3" style="text-align: center;">

                            <div class="card" style="width:250px;">
                                <img class="card-img-top" src="assets/img/sop-ayam.jpg" alt="ayam-bakar" style="width:100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Sop Ayam</h5>
                                </div>
                            </div>
                            <br>
                            <div class="card" style="width:250px;">
                                <img class="card-img-top" src="assets/img/nasi_goreng_bali.jpg" alt="ayam-bakar" style="width:100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng Bali</h5>
                                </div>
                            </div>

                        </div> -->
                    @endforeach
                </div>

            </div>
        </section>
    </div>
@endsection