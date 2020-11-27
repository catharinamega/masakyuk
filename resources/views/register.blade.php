<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS, FONT DLL -->
        <link href="assets/css/google_fonts.css?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <script src="assets/js/all.js"></script>
    </head>
    <body class="login" style="margin-top: 50px;">
       <div class="container" style="margin-top: 50px;">
           <div class="row px-3">
               <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                    <!-- <div class="img-left d-none d-md-flex" style="background-image: url('assets/img/tes.jpg');">
                        <img src="assets/img/tes.jpg" alt="">
                    </div> -->

                    <div class="img-left d-none d-md-flex" 
                     >
                        <img src="assets/img/masakyuk2.png" alt="" style="object-fit: scale-down;max-height: 600px;
                        max-width: 350px;
                        width: 370px;
                        height: 640px; margin-left:20px; justify-content: center;">
                    </div>
                        <div class="card-body">
                            <h4 class="judul text-center mt-4">
                               Daftar
                            </h4>
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif

                            @if (Session::has('danger'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <ul>

                                        <?php 
                                            $list_msg = Session::get('danger');
                                            foreach($list_msg as $msg){
                                                echo "<li>".$msg."</li>";
                                            }
                                        ?>
                                    </ul>
                                </div>
                            @endif

                            <form class="form-box px-3" action='/register' method="POST">
                            @csrf
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-user-plus"></i></span>
                                    <input type="username" name="username" placeholder="Username" 
                                    tabindex="10" required>
                                </div>
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-user-plus"></i></span>
                                    <input type="text" name="nama_pelanggan" placeholder="Nama Pengguna" 
                                    tabindex="10" required>
                                </div>
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email_pelanggan" placeholder="Alamat E-mail" 
                                    tabindex="10" required>
                                </div>
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-mobile-alt"></i></span>
                                    <input type="number" name="hp_pelanggan" placeholder="Nomor Handphone" 
                                    tabindex="10" required>
                                </div>
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-key"></i></span>
                                    <input type="password" name="password" placeholder="Masukan Kata Sandi" 
                                     required>
                                </div>
                                <div class="form-inputRegister">
                                    <span><i class="fas fa-key"></i></span>
                                    <input type="password" name="password2" placeholder="Ulangi Kata Sandi" 
                                     required>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input"id ="cb-1"
                                     name="">
                                     <label class="custom-control-label" for="cb-1">
                                         dengan klik daftar, maka anda telah menyetujui syarat dan ketentuan
                                         yang berlaku.
                                     </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-block text-uppercase">
                                        Daftar
                                    </button>
                                </div>
                                <div class="text-center">Atau</div><br>
                                <div class="Log text-center mb-2">
                                    <a href="/login" class="login-link">Masuk</a>
                                </div>
                                
                                <hr class="my-4"> 
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