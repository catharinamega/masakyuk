@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
    <div id="login">
        <h3 class="text-center text-white pt-5">Ganti Kata Sandi</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Ganti Kata Sandi</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Kata Sandi Lama</label><br>
                                <input type="password" name="katasandi" id="kslama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Kata Sandi Baru</label><br>
                                <input type="password" name="katasandibaru" id="ksbaru" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="konfirm" class="text-info">Konfirmasi Kata Sandi Baru</label> <br>
                                <input type="password" name="konfirmasi" id="konfirmasi_ks" class="form-control">
                                <input type="submit" name="submit" class="btn btn-info btn-md-2" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection