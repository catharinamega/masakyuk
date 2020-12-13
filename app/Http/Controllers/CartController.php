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
            $username_login = Session::get('login');
            $cart = new Cart();
            //2. PROSES
            if(isset($_POST['bahan_beli'])){
                $item = array();
                foreach($_POST['bahan_beli'] as $p){
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
  

    public function tampil_cart(){
        $cart = new Cart();
        $username_login = Session::get('login');
        $detail_cart = $cart->select_cart($username_login);
        return view('keranjang',compact('detail_cart'));
    }

    public function plus_cart(){
        $cart = new Cart();
        $username_login = Session::get('login');
        $id = $_GET['bahan_beli']['id'];
        $detail_cart = $cart->plus_cart($username_login, $id);
        return redirect()->back();
    }
}
