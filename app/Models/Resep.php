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
       
        $cmd = "SELECT nama_bahan, harga FROM `bahan` b, `resep_bahan` rb WHERE b.id_bahan = rb.id_bahan AND rb.id_resep=:id_resep;";
        
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
