@extends('shared/base2')

@section('judul','Akun Saya')

@section('isi_konten')
<?php 
    // dd($akun);
    

?>
<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">

        <h1 style="margin-bottom:20px;">Akun Saya</h1>
        <h4><u>Profil Saya</u></h4>
        <h5>Kelola informasi profil Anda untuk mengontrol, melindungi, dan mengamankan akun</h5>
        @if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="container" style="text-align: left;">


    <form class="form" action="/updateakun" method="POST"><br>
        @csrf
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label" style="text-align: right">Username :</label>
            <div class="col-sm-3">
                <input type="text" name="username" value="{{$akun->username}}" class="form-control" style="text-align: left; padding:7px; z-index:10000; font-color:black;" readonly >
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Nama :</label>
            <div class="col-sm-4">
                <input class="form-control" name="nama_pelanggan" value="{{$akun->nama_pelanggan}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Email : </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="email_pelanggan" value="{{$akun->email_pelanggan}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label" style="text-align: right">Kata Sandi : </label>
            <div class="col-sm-3">
               <p style="text-align: left">******** <a href="/gantikatasandi" style="margin-left:15px;"> Ubah </a></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="hp_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Nomor Telepon : </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="{{$akun->hp_pelanggan}}" name="hp_pelanggan">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat_utama" class="col-sm-2 col-form-label" style="text-align: right">Alamat Utama : </label>
            <div class="col-sm-7">
                <p readonly style="padding:7px; text-align:left;">{{$akun->alamat}} </p>
            </div>     
        </div>
        <div class="col-sm-5 mb-4">
           <a href="/logout">Keluar <i class="fas fa-sign-out-alt text-center"></a></i>
        </div>
<div style="margin-left:30px; text-align:left; margin-bottom:20px;">
        <button type="button" class="btn btn-primary active">
            <a href="/aturalamat" style="color: white; text-decoration: none;">Atur Alamat</a></button>
        <button type="button" class="btn btn-primary active" style="margin-left:10px;">
            <a href="/riwayattransaksi" style="color: white; text-decoration: none;">Riwayat Transaksi</a></button>
        <button class="btn btn-primary" type="submit" style="margin-left:350px;">Simpan Perubahan</button>

</div>
    </form>

</div>
<!-- <button type="button" class="btn btn-primary active">Atur Alamat</button> -->
@endsection