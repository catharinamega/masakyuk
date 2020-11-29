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
        $input_bahan = $req->input('search_bahan');
        // $cari = new Katalog;

        // $res = $cari->nyari($input_bahan);

        $search_bahan = Katalog::nyari_bahan($input_bahan);
        $bahan = $search_bahan;
        // dd($search_bahan);
        return view('katalogbahan',compact('bahan'));
    }

    public static function search_resep(Request $req){
        $input_resep = $req->input('search_resep');
        // $cari = new Katalog;

        // $res = $cari->nyari($input_bahan);

        $search_resep = Katalog::nyari_resep($input_resep);
        $resep = $search_resep;
        // dd($search_bahan);
        return view('katalogresep',compact('resep'));
    }
}
