<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Checkout extends Model
{
    use HasFactory;
    public function get_all($username_login){
        $cmd = "CALL select_riwayat(:username);";

        $data=['username'=> $username_login];
        $riwayat_transaksi = DB::select($cmd,$data);
        // dd($riwayat_transaksi);
        return $riwayat_transaksi;


    }

    public function get_detail($id){
        $cmd = "CALL select_detail(:id_transaksi);";

        $data=['id_transaksi'=> $id];
       
        $detail_pesanan = DB::select($cmd,$data);
        // dd($detail_pesanan);
        return $detail_pesanan[0];


    }

    public function daftar_bahan($id){
        $bahan = "CALL select_detail_daftarbeli(:id_transaksi2);";

        $data2=['id_transaksi2'=> $id];

        $daftar_bahan = DB::select($bahan,$data2);
        // dd($detail_pesanan);
        return $daftar_bahan;


    }

}
