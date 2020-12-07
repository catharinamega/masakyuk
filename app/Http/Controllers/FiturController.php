<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Alert;

class FiturController extends Controller
{
    public function faq(){
        return view('faq');

    }

    public function sdank(){
        return view('sdank');
        
    }

    public function info_pembayaran(){
        return view('info_pembayaran');
        
    }

    public function info_pengiriman(){
        return view('info_pengiriman');
        
    }
}
