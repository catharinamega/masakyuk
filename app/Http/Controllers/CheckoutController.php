<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Checkout;
use Session;

class CheckoutController extends Controller
{
    public function tampil_checkout(){
        return view('checkout');
        
    }


    public function tampil_pembayaran(){
        return view('pembayaran');
        
    }

    public function riwayat_transaksi(){
        $usr = new Checkout;
        $username_login = Session::get('login');
        $riwayat = $usr->get_all($username_login);
        return view('riwayat',compact('riwayat'));
        
    }

    public function detail_pesanan(){
        return view('detail');
        
    }


}
