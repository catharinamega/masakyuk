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
}
