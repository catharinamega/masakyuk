<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use Session;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class ResepController extends Controller
{
    //tampilkan detail resep
    public function detail_resep($id){
      
        // echo $id;
        $rsp = new Resep();
        $detail_resep = $rsp->get_all($id);
        // dd($detail_resep);
        return view('resep',compact('detail_resep'));
    }
}
