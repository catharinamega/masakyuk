<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use Session;

class KatalogController extends Controller
{
    //tampilkan katalogresep
    public function katalog_resep(){
        $resep = Katalog::get_all();
         // dd($resep);
        return view('katalogresep',compact('resep'));
    }
}
