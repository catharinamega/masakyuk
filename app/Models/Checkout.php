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

    public function add_checkout($username_login, $bahan){
        $cmd = "SELECT username, b.id_bahan, nama_bahan, b.harga, item_qty, subtotal, c.stat_del FROM bahan b, cart c WHERE b.id_bahan = c.id_bahan AND username = :user AND c.id_bahan = :bahan;";

        $data=[
            'user'=> $username_login,
            'bahan'=> $bahan
            ];
        $riwayat_transaksi = DB::select($cmd,$data);
        // dd($riwayat_transaksi);
        return $riwayat_transaksi;
        

    }

}
