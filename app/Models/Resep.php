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

    public function get_all($id_resep){
       
        $cmd = "SELECT gambar_resep, judul_resep, porsi, durasi, k.jenis_kategori, penjelasan_resep, b.nama_bahan, prosedur_resep ".
                "FROM ".$this->tabel_resep." r, ".$this->tabel_resepbahan." rb, ".$this->tabel_kategori." k, ".$this->tabel_bahan." b ".
                "WHERE r.id_resep=:id_resep AND k.id_kategori = r.id_kategori AND rb.id_resep = r.id_resep AND rb.id_bahan = b.id_bahan;";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=['id_resep'=> $id_resep];
        $akun = DB::select($cmd,$data);
        dd($akun[0]);

    }

}
