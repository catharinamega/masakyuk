<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class CartController extends Controller
{
    public function add_cart(Request $req){
        // var_dump($req);
        if(Session::has('login')){
                $username_login = Session::get('login');
                $cart = new Cart();
                //2. PROSES
                if(isset($req['bahan_beli'])){
                    $item = array();
                    foreach($req['bahan_beli'] as $p){
                    // print_r($p);
                    if(isset($p['id'])){
                        $detail_cart = $cart->get_cart($username_login,$p['id'],$p['qty'],$p['harga']);
                        // $temp=[ 
                        //     'id' => $p['id'],
                        //     'qty'=> $p['qty'],
                        //     'price'=> $p['harga'],
                        // ];
                        // array_push($item,$temp);
                    }
                }
            }
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
  

    public function tampil_cart(){
        $cart = new Cart();
        $username_login = Session::get('login');
        $detail_cart = $cart->select_cart($username_login);
        $jumlah = count($detail_cart);
        // dd($jumlah);
        // die;
        return view('keranjang',compact('detail_cart'),compact('jumlah'));
    }

    public function plus_cart(){
        $cart = new Cart();
        $username_login = Session::get('login');
        $id = $_GET['bahan_beli']['id'];
        $detail_cart = $cart->plus_cart($username_login, $id);
        return redirect()->back();
    }
    public function minu_cart(){
        $cart = new Cart();
        $username_login = Session::get('login');
        $id = $_GET['bahan_beli']['id'];
        $qty = $_GET['bahan_beli']['qty'];
        if($qty > 0){
            $detail_cart = $cart->minu_cart($username_login, $id);
        }
        return redirect()->back();
    }
}
