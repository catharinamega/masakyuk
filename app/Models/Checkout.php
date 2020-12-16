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

    public function get_alamat($username_login){
        $cmd = "SELECT p.alamat_utama, p.nama_pelanggan `username`, hp_pelanggan, alamat FROM `alamat` a, `pelanggan` p, `alamat_pelanggan` ap WHERE a.id_alamat = ap.id_alamat AND p.alamat_utama = ap.id_alamat_pelanggan AND p.username = :user;";

        $data=[
            'user'=> $username_login
            ];
        $get_alamat = DB::select($cmd,$data);
        // dd($riwayat_transaksi);
        return $get_alamat;
        

    }

    public function add_transaksi($user, $alamat, $pembayaran, $pengiriman, $harga, $ongkir){
        $bahan = "CALL insert_transaksi(:nama, :alamat, :pembayaran, :pengiriman, :harga, :ongkir, :stat);";

        $data2=[
            'nama'=> $user,
            'alamat'=> $alamat,
            'pembayaran'=> $pembayaran,
            'pengiriman'=> $pengiriman,
            'harga'=> $harga,
            'ongkir'=> $ongkir,
            'stat'=> 0
            ];

        $daftar_bahan = DB::insert($bahan,$data2);
        // dd($detail_pesanan);
        return $daftar_bahan;


    }

    public function get_id_transaksi(){
        $transaction = "SELECT * FROM `transaksi` ORDER BY `id_transaksi`  DESC LIMIT 1";
        $last_transaction = DB::select($transaction);
        // dd($detail_pesanan);
        return $last_transaction;


    }

    public function add_detail_transaksi($id, $bhn, $qty, $hrg){
        $bahan = "CALL insert_penjelasan_transaksi(:id, :bhn, :qty, :hrg);";

        $data2=[
            'id'=> $id,
            'bhn'=> $bhn,
            'qty'=> $qty,
            'hrg'=> $hrg
            ];

        $daftar_bahan = DB::insert($bahan,$data2);
        // dd($detail_pesanan);
        return $daftar_bahan;


    }    

    
    public function min_cart($user, $id){
        $bahan = "DELETE FROM `cart` WHERE username = :user AND id_bahan = :id;";
        // dd($user);
        // die;
        $data2=[
            'user'=>$user,
            'id'=> $id
            ];

        $daftar_bahan = DB::delete($bahan,$data2);
        // dd($detail_pesanan);
        return $daftar_bahan;


    }   

}
