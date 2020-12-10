<!DOCTYPE html>
<html>
    <head>
        <title>Selamat Datang</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS, FONT DLL -->
        <link href="assets/css/google_fonts.css?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <script src="assets/js/all.js"></script>
    </head>
    <body class="login">
       <div class="container">
           <div class="row px-3">
               <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                    <div class="img-left d-none d-md-flex"
                     >
                        <img src="assets/img/masakyuk2.png" alt="" style="object-fit: scale-down;max-height: 600px;
                        max-width: 350px;
                        width: 350px;
                        height: 500px; margin-left:20px;">
                    </div>
                        <div class="card-body">
                            <h4 class="judul text-center mt-4">
                                Masuk ke Akunmu
                            </h4>


        @if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('warning') }}</strong>
            </div>
        @endif
                            <!-- FORM LOGIN -->
                            <form class="form-box px-3" action='/authenticate' method='POST'>
                            @csrf
                                <div class="form-inputLogin">
                                    <span><i class="far fa-envelope"></i></span>
                                    <input type="text" name="username" id="username" placeholder="Username" 
                                    tabindex="10" required>
                                </div>
                                <div class="form-inputLogin">
                                    <span><i class="fas fa-key"></i></span>
                                    <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi" 
                                     required>
                                </div>
                               
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-block text-uppercase">
                                        Login
                                    </button>
                                </div>
                                <div class="text-right">
                                    <a href="/lupakatasandi" class="forget-link">
                                        Lupa Password?
                                    </a>
                                </div>
                                <div class="text-center">Atau</div>
                                <hr class="my-4"> 
                                <div class="text-center mb-2">
                                    Belum Punya Akun?
                                    <a href="/register" class="register-link">Daftar Sekarang</a>
                                </div>
                            </form>
                        </div>
               </div>
           </div>
       </div>

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