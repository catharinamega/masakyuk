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
        return redirect('/checkout');
    }
    public function add_cart_bahan($id){
        $username_login = Session::get('login');
        $cart = new Cart();
        $detail_cart = $cart->get_cart($username_login,$id,$p['qty'],$p['harga']);            
        // dd($daftar_bahan);
        // die;
        return view('detail',compact('detail','daftar_bahan'));
        
    }
}
