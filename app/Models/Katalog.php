<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Katalog extends Model
{
    use HasFactory;
    //katalog resep
    public static function get_all(){
        $resep = DB::table('resep')->get(['gambar_resep','judul_resep','durasi','penjelasan_resep']);
        return $resep;
        // $resep = Katalog::all(['gambar_resep','judul_resep','penjelesan_resep'])->toarray();
        // $reseps = [$resep];
        // dd($reseps);



    }
    public static function get_all2(){
        $cmd = "SELECT gambar_bahan, nama_bahan, CONCAT(ukuran_basic,' ', s.tipe_satuan) `jumlah` , IF(LENGTH(harga)=6, CONCAT('Rp ', SUBSTR(harga, -6, 3), '.', SUBSTR(harga, -3), ',-'), IF(LENGTH(harga)=5, CONCAT('Rp ', SUBSTR(harga, -5, 2), '.', SUBSTR(harga, -3), ',-'), IF(LENGTH(harga)=4, CONCAT('Rp ', SUBSTR(harga, -4, 1), '.', SUBSTR(harga, -3), ',-'), CONCAT('Rp ', harga, ',-')))) `harga`
        FROM bahan b, satuan s
        WHERE s.id_satuan = b.id_satuan AND status_jual = 1 AND status_ready = 1;";

        $res = DB::select($cmd);
        return $res;


    }
}
