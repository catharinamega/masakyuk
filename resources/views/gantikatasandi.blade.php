@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
    <div id="login">
        <h3 class="text-center text-white pt-5">Ganti Kata Sandi</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                            @if (Session::has('danger'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ Session::get('danger') }}</strong>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif
                        <form id="login-form" class="form" action="/gantikatasandi" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Ganti Kata Sandi</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Kata Sandi Lama</label><br>
                                <input type="password" name="password_lama" id="kslama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Kata Sandi Baru</label><br>
                                <input type="password" name="password_baru" id="ksbaru" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="konfirm" class="text-info">Konfirmasi Kata Sandi Baru</label> <br>
                                <input type="password" name="password_baru2" id="konfirmasi_ks" class="form-control">
                                <input type="submit" name="submit" class="btn btn-info btn-md-2" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection