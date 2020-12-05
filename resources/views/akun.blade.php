@extends('shared/base2')

@section('judul','Akun Saya')

@section('isi_konten')
<?php 
    // dd($akun);
    

?>
    <h1 style="margin-bottom:20px;">Akun Saya</h1>
    <h2><u>Profil Saya</u></h2>
    <h5>Kelola informasi profil Anda untuk mengontrol, melindungi, dan mengamankan akun</h5>
    <form class="form" action="/updateakun" method="POST" ><br>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label" style="text-align: right">Username :</label>
                <div class="col-sm-3">
                    <input type="text" readonly class="form-control"  value="{{$akun->username}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Nama :</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control"  value="{{$akun->nama_pelanggan}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email_pelanggan" class="col-sm-2 col-form-label" style="text-align: right">Email : </label> 
                <div class="col-sm-4">
                    <input type="text" class="form-control"  value="{{$akun->email_pelanggan}}"> 
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
                    <input type="text" class="form-control"  value="{{$akun->hp_pelanggan}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_utama" class="col-sm-2 col-form-label" style="text-align: right">Alamat Utama : </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  value="{{$akun->alamat}}">
                </div>
            </div>
        <!-- <button type="button" class="btn btn-primary active">Atur Alamat</button> -->
        <button type="button" class="btn btn-primary active" style="margin-bottom:20px;">
            <a href="/" style="color: white; text-decoration: none;">Riwayat Transaksi</a></button>
        <button type="button" class="btn btn-primary active" style="margin-bottom:20px;">
            <a href="/" style="color: white; text-decoration: none;">Atur Alamat</a></button>
        <button class="btn btn-primary" type="submit" style="margin-bottom:20px;">
            Simpan Perubahan</button>
    </form>
@endsection