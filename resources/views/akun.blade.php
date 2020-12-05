@extends('shared/base2')

@section('judul','Akun Saya')

@section('isi_konten')
<?php 
    // dd($akun);
    

?>
    <h1 style="margin-bottom:20px;">Akun Saya</h1>
    <h2><u>Profil Saya</u></h2>
    <h5>Kelola informasi profil Anda untuk mengontrol, melindungi, dan mengamankan akun</h5>
    <form action="/updateakun" method="POST" style="margin-left:100px;">
    
        <label for="username">Username:</label>
        <input type="text" name="username" value="{{$akun->username}}"disabled><br>
        <label for="nama_pelanggan">Nama:</label>
        <input type="text" name="nama_pelanggan" value="{{$akun->nama_pelanggan}}"><br>
        <label for="email_pelanggan">Email:</label>
        <input type="text" name="email_pelanggan" value="{{$akun->email_pelanggan}}"><br>
        <label for="password">Kata Sandi:</label>
        <p>********</p><br>
        <label for="hp_pelanggan">Nomor Telepon:</label>
        <input type="text" name="hp_pelanggan" value="{{$akun->hp_pelanggan}}"><br>
        <label for="alamat_utama">Alamat Utama :</label>
        <input type="text" name="alamat_utama" value="{{$akun->alamat}}"><br>
        <!-- <button type="button" class="btn btn-primary active">Atur Alamat</button> -->
        <button type="button" class="btn btn-primary active" style="margin-bottom:20px;"><a href="/" style="color: white; text-decoration: none;">Riwayat Transaksi</a></button>
        <button type="button" class="btn btn-primary active" style="margin-bottom:20px;"><a href="/" style="color: white; text-decoration: none;">Atur Alamat</a></button>
        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
    </form>
@endsection