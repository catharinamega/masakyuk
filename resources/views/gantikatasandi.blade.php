@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
    <div id="login">
        
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
                            <h2 class=" text-left mt-3 " style="margin-bottom:30px;">Ganti Kata Sandi</h2>
                            <div class="form-group  text-left">
                                <label for="username" >Kata Sandi Lama</label><br>
                                <input type="password" name="password_lama" id="kslama" class="form-control">
                            </div>
                            <div class="form-group  text-left">
                                <label for="password" >Kata Sandi Baru</label><br>
                                <input type="password" name="password_baru" id="ksbaru" class="form-control">
                            </div>
                            <div class="form-group  text-left">
                                <label for="konfirm" >Konfirmasi Kata Sandi Baru</label> <br>
                                <input type="password" name="password_baru2" id="konfirmasi_ks" class="form-control">
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection