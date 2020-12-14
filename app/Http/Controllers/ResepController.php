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
        $bahan_resep = $rsp->get_bahan($id);
        // dd($detail_resep);
        $proc_resep = explode("#", $detail_resep[0]->prosedur_resep);
        // dd($proc_resep);
        return view('resep',compact('detail_resep', 'proc_resep', 'bahan_resep'));
        
    }

}
