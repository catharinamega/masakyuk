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
}
