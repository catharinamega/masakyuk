<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function get_cart($user, $id, $qty, $harga){
       
        $cmd = "SELECT `id_bahan`, CONCAT(`ukuran_jual`,' ',`tipe_satuan`,' ',`nama_bahan`) `nama_bahan`, IF(MOD(`konv_beli`,`ukuran_jual`) = 0,(`konv_beli` DIV `ukuran_jual`),(`konv_beli` DIV `ukuran_jual`) + 1) `rec_beli`, `stok`, `harga`, `status_jual` FROM (SELECT b.`id_bahan`, `nama_bahan`, `stok`, `ukuran_basic` `ukuran_jual`, b.`id_satuan` `satuan_jual`, `qty` `ukuran_beli`, b.`harga` `harga`, rb.`id_satuan` `satuan_beli`, `status_jual`, (k.`value`*`qty`) `konv_beli` FROM `konversi` k, `bahan` b, resep_bahan rb WHERE b.id_bahan = rb.id_bahan AND rb.`id_satuan` = k.`satuan_awal` AND b.`id_satuan` = k.`satuan_hasil` AND rb.id_resep=:id_resep AND `status_jual`=1) b, `satuan` s WHERE b.`satuan_jual` = s.`id_satuan`;";
        
        // $cmd2 = "SELECT rb.qty, s.tipe_satuan, b.nama_bahan ".
        //         "FROM ".$this->tabel_resep." r, ".$this->tabel_resepbahan." rb, ".$this->tabel_bahan." b, ".$this->tabel_satuan." s"." ".
        //         "WHERE r.id_resep=:id_resep  AND rb.id_resep = r.id_resep AND rb.id_bahan = b.id_bahan AND rb.id_satuan = s.id_satuan";
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=['id_resep'=> $id_resep];
        $resep = DB::select($cmd,$data);
        return $resep;
        // dd($resep);
        // die;

    }
}
