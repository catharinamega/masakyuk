<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, FONT DLL -->
    <link href="../assets/css/google_fonts.css?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <script src="../assets/js/all.js"></script>

    <title> @yield('judul') MasakYuk</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="col-md-3">
            <a href="/home"> 
                <img class="navbar-brand" style="height: 60px;" src="../assets/img/masakyuk2.png"  alt="ini logo loh">
            </a>
        </div>
        <span class="col-md-6">
      <!-- search form -->
      <form class="form-inline" method="GET" action="@yield('searching')">
        @csrf
        <!-- dropdown -->
        <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" disabled selected hidden>Resep</option>
            <option value='/katalogresep'>Resep</option>
            <option value='/katalogbahan'>Bahan</option>
            
        <?php 
        // if($_POST['option_user'] === '/katalogresep'){ 
        //     "<option value='/katalogresep' disabled selected hidden>Resep</option>";}
        // elseif( $_POST['option_user'] === '/katalogbahan'){ 
        //     "<option value='/katalogresep' disabled selected hidden>Bahan</option>";}
       ?>

        </select>

       
        <input class="form-control mr-sm-2 col-md-5" type="text" name="@yield('input_search')" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </span>
        <div class='col-md-3 d-flex justify-content-end'>
            <!-- cart ini diambil dari dom fix -->
            <a href="/cart" class="btn btn-primary" id="cart">
        <i class="fas fa-shopping-cart"></i>
        (<span id='counterCart'>
          0
        </span>)
      </a>
            <!-- profile button -->
            <button class='btn btn-lg' style='background-color:transparent;'>
        <div style='text-align:center; position: relative; margin-left: 6px; margin-right: 6px; float: left;'>
    @if (!Session::has('login'))
          <a href="/login"><i class="fa fa-user-alt"></i></a>
        </div>
    @else
            <a href="/akun"><i class="fa fa-user-alt"></i></a>
        </div>  
    @endif
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
                    <a class="nav-link" href="/hubungikami">Hubungi Kami <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/infopembayaran">Info Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/infopengiriman">Info Pengiriman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">Pertanyaan Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sdank">Syarat dan Ketentuan</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->
    </nav>
  
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
                                <a href="/infopembayaran" style="color: white; text-decoration: none;" class="text-left">> Info Pembayaran</a>
                                <br>
                                <a href="/infopengiriman" style="color: white; text-decoration: none;" class="text-left">> Info Pengiriman</a>
                            </div>

                            <div class="col text-left" style="padding-top: 5px;">
                                <br>
                                @if (!Session::has('login'))
                                    <a href="/login" style="color: white; text-decoration: none;" class="text-left">> Masuk</a>
                                   
                                @else
                                        <a href="/akun" style="color: white; text-decoration: none;" class="text-left">> Profil</a>
                                    
                                @endif
                                <!-- <a href="" style="color: white; text-decoration: none;" class="text-left">> Masuk</a> -->
                                <br>
                                <a href="/faq" style="color: white; text-decoration: none;" class="text-left">> Pertanyaan Umum</a>
                                <br>
                                <a href="/sdank" style="color: white; text-decoration: none;" class="text-left">> Syarat & Ketentuan</a>
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
                <style>
                    body {
                      font-family: Arial, Helvetica, sans-serif;
                      font-size: 20px;
                    }
                    
                    #myBtn {
                      display: none;
                      position: fixed;
                      bottom: 20px;
                      right: 10px;
                      z-index: 99;
                      height: 50px;
                      width: 50px;
                      border: none;
                      outline: none;
                      background-image:url(assets/img/topp.svg);
                      cursor: pointer;
                      padding: 15px;
                      border-radius: 4px;
                    }
                    
                    #myBtn:hover {
                      background-color: #555;
                    }
                    </style>
                    </head>
                    <body> 
                    <button class="rounded-circle" onclick="topFunction()" id="myBtn" title="Go to top"></button>
                    
                    <script>
                    //Get the button
                    var mybutton = document.getElementById("myBtn");
                    
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};
                    
                    function scrollFunction() {
                      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mybutton.style.display = "block";
                      } else {
                        mybutton.style.display = "none";
                      }
                    }
                    
                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                      document.body.scrollTop = 0;
                      document.documentElement.scrollTop = 0;
                    }
                    </script>
        <!-- BAWAAN BOOTSTRAP JQUERY -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <script src="../assets/js/jquery-3.5.1.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- JS -->
        <script src="../assets/js/script.js"></script>
        <!-- EASING JQUERY -->
        <script src="../assets/js/jquery.easing.1.3.js"></script>

        <!-- <script>
            $( "#dropdown_katalog" ).on("change", function() {
                // alert( "Handler for .change() called." );
                var selected_value = $('#dropdown_katalog').val();
                // alert(selected_value);
                var url = "/katalogresep";    
                if(selected_value == 'bahan'){
                    url = "/katalogbahan";
                }    
                //  else {
                //     // $(location).attr('href', url);
                // }
                $(location).attr('href', url);    
            });
        </script> -->
    </body>

</html>
