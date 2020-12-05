@extends('shared/base2')

@section('judul','Akun Saya')

@section('isi_konten')
<?php 
    // dd($akun);
    

?>
<div class="container">
    <div style="margin-left:20px; text-align: left;">

        <h1 style="margin-bottom:20px;">Akun Saya</h1>
        <h4><u>Profil Saya</u></h4>
        <h5>Kelola informasi profil Anda untuk mengontrol, melindungi, dan mengamankan akun</h5>
    </div>
</div>
<div class="container" style="text-align: left;">


    <form class="form" action="/updateakun" method="POST"><br>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label" style="text-align: right">Username :</label>
            <div class="col-sm-3">
                <p readonly style="text-align: left; padding:7px;">{{$akun->username}} </p>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Nama :</label>
            <div class="col-sm-4">
                <input class="form-control" value="{{$akun->nama_pelanggan}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Email : </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{$akun->email_pelanggan}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label" style="text-align: right">Kata Sandi : </label>
            <div class="col-sm-3">
                <p style="text-align: left">********</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="hp_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Nomor Telepon : </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="{{$akun->hp_pelanggan}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat_utama" class="col-sm-2 col-form-label" style="text-align: right">Alamat Utama : </label>
            <div class="col-sm-7">
                <p readonly style="padding:7px; text-align:left;">{{$akun->alamat}} </p>
            </div>
        </div>
<div style="margin-left:30px; text-align:left; margin-bottom:20px;">
        <button type="button" class="btn btn-primary active">
            <a href="/" style="color: white; text-decoration: none;">Atur Alamat</a></button>
        <button type="button" class="btn btn-primary active" style="margin-left:10px;">
            <a href="/" style="color: white; text-decoration: none;">Riwayat Transaksi</a></button>
        <button class="btn btn-primary" type="submit" style="margin-left:350px;">Simpan Perubahan</button>

</div>
    </form>

</div>
<!-- <button type="button" class="btn btn-primary active">Atur Alamat</button> -->
@endsection