<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Checkout;
use Session;

class CheckoutController extends Controller
{
    public function tampil_checkout(){
        $chk = new Checkout;
        $username_login = Session::get('login');
        if(isset($_GET['bahan_chk'])){
            $item = array();
            foreach($_GET['bahan_chk'] as $p){
                // print_r($p);
                if(isset($p['id'])){
                $detail_cart = $chk->add_checkout($username_login,$p['id']);
                // $temp=[ 
                //     'id' => $p['id'],
                //     'qty'=> $p['qty'],
                //     'price'=> $p['harga'],
                // ];
                array_push($item,$detail_cart);
                }
            }
        }
        return view('checkout',compact('item'));
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

    public function detail_pesanan($id){
        $usr = new Checkout;
        $detail = $usr->get_detail($id);
        $daftar_bahan = $usr->daftar_bahan($id);
        return view('detail',compact('detail','daftar_bahan'));
    }


}
