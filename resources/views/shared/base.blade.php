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


    <title>@yield('judul) - MasakYuk</title>
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
        <select style="margin-right: 10px;" name="option_user" class="form-control">
            <option value="resep">Resep</option>
            <option value="bahan">Bahan</option>
        </select>
        <input class="form-control mr-sm-2 col-md-5" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </span>
        <div class="col-md-3 d-flex justify-content-end">
            <!-- cart ini diambil dari dom fix -->
            <button class="btn btn-primary" id="cart">
        <i class="fas fa-shopping-cart"></i>
        (<span id="counterCart">
          0
        </span>)
      </button>
            <!-- profile button -->
            <button class="btn btn-lg" style="background-color:transparent;">
        <div style="text-align:center; position: relative; margin-left: 6px; margin-right: 6px; float: left;">
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
            @yield('judul_jumbotron')
        </div>
    </div>

    <!-- Fluid Jumbotron -->

    @yield('isi_konten')


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