<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Resep extends Model
{
    use HasFactory;
    private $tabel_resep = 'resep';
    private $tabel_resepbahan = 'resep_bahan';
    private $tabel_kategori = 'kategori';
    private $tabel_bahan = 'bahan';
    private $tabel_satuan = 'satuan';

    public function get_all($id_resep){
       
        $cmd = "SELECT gambar_resep, judul_resep, porsi, durasi, k.jenis_kategori, penjelasan_resep, CONCAT(rb.qty,' ',s.tipe_satuan,' ',b.nama_bahan) `bahan`, prosedur_resep ".
                "FROM ".$this->tabel_resep." r, ".$this->tabel_resepbahan." rb, ".$this->tabel_kategori." k, ".$this->tabel_bahan." b, ".$this->tabel_satuan." s ".
                "WHERE r.id_resep=:id_resep AND k.id_kategori = r.id_kategori AND rb.id_resep = r.id_resep AND rb.id_bahan = b.id_bahan AND rb.id_satuan = s.id_satuan;";
        
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

    public function get_bahan($id_resep){
       
        $cmd = "SELECT CONCAT(`ukuran_jual`,' ',`tipe_satuan`,' ',`nama_bahan`) `nama_bahan`, IF(MOD(`konv_beli`,`ukuran_jual`) = 0,(`konv_beli` DIV `ukuran_jual`),(`konv_beli` DIV `ukuran_jual`) + 1) `rec_beli`, `harga` FROM (SELECT `nama_bahan`, `ukuran_basic` `ukuran_jual`, b.`id_satuan` `satuan_jual`, `qty` `ukuran_beli`, b.`harga` `harga`, rb.`id_satuan` `satuan_beli`, (k.`value`*`qty`) `konv_beli` FROM `konversi` k, `bahan` b, resep_bahan rb WHERE b.id_bahan = rb.id_bahan AND rb.`id_satuan` = k.`satuan_awal` AND b.`id_satuan` = k.`satuan_hasil` AND rb.id_resep=:id_resep) b, `satuan` s WHERE b.`satuan_jual` = s.`id_satuan`;";
        
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
