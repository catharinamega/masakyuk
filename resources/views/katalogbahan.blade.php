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

    <title>Daftar Bahan</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="col-md-3">
            <a href="/home"> 
                <img class="navbar-brand" style="height: 60px;" src="assets/img/masakyuk2.png"  alt="ini logo loh">
            </a>
        </div>
        <span class="col-md-6">
      <!-- search form -->
      <form class="form-inline" method="GET" action="/searchbahan" >
      @csrf
        <!-- dropdown -->
        <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" disabled selected hidden>Bahan</option>
            <option value='/katalogresep'>Resep</option>
            <option value='/katalogbahan' selected="selected">Bahan</option>
        </select>
        <input class="form-control mr-sm-2 col-md-5" type="text" placeholder="Search" name="search_bahan">
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
          <a href="/login"><i class="fa fa-user-alt"></i></a></div>
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

    <div class="jumbotron jumbotron-fluid" style=" background-image: url('assets/img/pisang.png');">
        <div class="container text-center" id="judul-tengah">
            <h2 class="judul" style="font-size: 50px;">Daftar Bahan</h2>

           
        </div>
    </div>

    <!-- Fluid Jumbotron -->

    <!-- katalog resep -->
    
    <section id="portfolio" class="portfolio bg-light pb-4">
        
            <div class="row" style="padding-left:50px; padding-right:50px;">
            <?php $index = 0; ?>
                @foreach($bahan as $bhn)
                
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/img/bahan/{{$bhn->gambar_bahan}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$bhn->nama_bahan}}</h5>
                                <h6 class="card-title">{{$bhn->jumlah}}</h6>
                                
                                <h5 class="card-title">{{$bhn->harga}}</h5>
                                <div class="qty mt-4">
                                    <span class="minus{{$index}} minus bg-dark ">-</span>
                                    <input type="number" class="count{{$index}} count" name="qty" value="1">
                                    <span class="plus{{$index}} plus bg-dark ">+</span>
                                </div>
                                <a href="#" class="btn btn-primary" style="margin-top: 15px;">Tambah ke Troli</a>
                            </div>
                        </div>
                    </div>
                    <?php $index++; ?>
                   
                @endforeach
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

