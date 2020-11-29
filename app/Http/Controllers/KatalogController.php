<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use Session;
use \Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;


class KatalogController extends Controller
{
    //tampilkan katalogresep
    public function katalog_resep(){
        $resep = Katalog::get_all();
         // dd($resep);
        return view('katalogresep',compact('resep'));
    }

    public function katalog_bahan(){
        $bahan = Katalog::get_all2();
        // dd($bahan);
        return view('katalogbahan',compact('bahan'));
    }

    public static function search_bahan(Request $req){
        $nyari_bahan = $req->input('search_bahan');
        // $cari = new Katalog;

        // $res = $cari->nyari($search_bahan);

        // $search_bahan = Katalog::nyari_bahan($nyari_bahan);
        dd($search_bahan);
        // return view('katalogbahan',compact('res'));
    }
}
