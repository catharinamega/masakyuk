<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, FONT DLL -->
    <link href="assets/css/google_fonts.css?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <script src="assets/js/all.js"></script>


    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="col-md-3">
        
            <img class="navbar-brand" style="height: 60px;" src="assets/img/masakyuk2.png" alt="ini logo loh">
        </div>
        <span class="col-md-6">
      <!-- search form -->
      <form class="form-inline" action="/action_page.php">
        <!-- dropdown -->
        <select style='margin-right: 10px;' name='option_user' class='form-control'>
          <option value=''>Semuanya</option>
          <option value='resep'>Resep</option>
          <option value='bahan'>Bahan</option>
        </select>
        <input class="form-control mr-sm-2 col-md-5" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </span>
        <div class='col-md-3 d-flex justify-content-end'>
            <!-- cart ini diambil dari dom fix -->
            <button class="btn btn-primary" id="cart">
        <i class="fas fa-shopping-cart"></i>
        (<span id='counterCart'>
          0
        </span>)
      </button>
            <!-- profile button -->
            <button class='btn btn-lg' style='background-color:transparent;'>
        <div style='text-align:center; position: relative; margin-left: 6px; margin-right: 6px; float: left;'>
          <a href="login.html"><i class="fa fa-user-alt"></i></a></div>
      </button>
            <!-- hamburger menu -->
            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>

        </div>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info Pengiriman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pertanyaan Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Syarat dan Ketentuan</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->
    </nav>
    <!-- Fluid Jumbotron -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" id="judul-tengah">
            <h2 class="judul" style="font-size: 50px;">MasakYuk</h2>

            <h3 class="tagline">Pesan, Masak, Makan</h3>
        </div>
    </div>

    <!-- Fluid Jumbotron -->

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
                <div class="row justify-content-center">
                    <div class="col-md-3" style="text-align: center;">

                        <div class="card" style="width:250px;">
                            <img class="card-img-top" src="assets/img/ayam-bakar.jpg" alt="ayam-bakar" style="width:100%;">
                            <div class="card-body">
                                <h5 class="card-title">Ayam Bakar Madu</h5>
                            </div>
                        </div>
                        <br>
                        <div class="card" style="width:250px;">
                            <img class="card-img-top" src="assets/img/nasi_goreng.jpg" alt="ayam-bakar" style="width:100%;">
                            <div class="card-body">
                                <h5 class="card-title">Nasi Goreng Original</h5>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-3" style="text-align: center;">

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


                    </div>


                </div>

            </div>
        </section>


        <!-- footer -->
        <footer class="bg-dark text-white" style="background: rgba(0, 64, 138, 0.8);">
            <div class="container">
                <div class="row pt-3">

                    <div class="col text-left">
                        <h4>Tentang Kami</h4>
                        <p style="text-align: justify;">MasakYuk adalah situs web yang menyediakan resep dan layanan pesan bahan secara daring.</p>
                    </div>
                    <!-- DI SI -->
                    <div class="col text-left" style="padding-left: 90px;">
                        <h5>Informasi</h5>
                        <a href="" style="color: white; text-decoration: none;" class="text-left">> Info Pembayaran</a>
                        <br>
                        <a href="" style="color: white; text-decoration: none;" class="text-left">> Info Pengiriman</a>
                    </div>

                    <div class="col text-left" style="padding-top: 5px;">
                        <br>
                        <a href="" style="color: white; text-decoration: none;" class="text-left">> Masuk</a>
                        <br>
                        <a href="" style="color: white; text-decoration: none;" class="text-left">> Pertanyaan Umum</a>
                        <br>
                        <a href="" style="color: white; text-decoration: none;" class="text-left">> Syarat & Ketentuan</a>
                    </div>

                    <div class="col text-center">
                        <h5>Ikuti Kami</h5>
                        <div class="sosmed">
                            <i class="fab fa-instagram fa-3x" style="margin-right: 15px;"></i>
                            <i class="fab fa-facebook-square fa-3x"></i>

                        </div>
                    </div>

                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <p>&copy; MasakYuk 2020.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- BAWAAN BOOTSTRAP JQUERY -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script src="assets/js/jquery-3.5.1.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- JS -->
        <script src="assets/js/script.js"></script>
        <!-- EASING JQUERY -->
        <script src="assets/js/jquery.easing.1.3.js"></script>
</body>

</html>