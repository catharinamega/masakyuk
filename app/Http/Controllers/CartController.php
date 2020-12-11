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
        
        
        
        // dd($username_login);
        // die();
        if(isset($_POST)){
            //1. INPUT
            echo "<pre>";
            echo "</pre>";
            
            //2. PROSES
            if(isset($_POST['bahan_beli'])){
                $item = array();
                foreach($_POST['bahan_beli'] as $p){
                    // print_r($p);
                    if(isset($p['id'])){
                        $temp=[ 
                            'id' => $p['id'],
                            'qty'=> $p['qty'],
                            'price'=> $p['harga'],
                        ];
                        array_push($item,$temp);
                    }
                }
                foreach($item as $p){
                    $detail_cart = $cart->get_cart($username_login,$p['id'],$p['qty'],$p['price']);
                    // return view('resep',compact('detail_resep', 'proc_resep', 'bahan_resep'));
                    
                }
                dd($detail_cart);
                die;
                //3. OUTPUT
                // echo "<pre>";
                // print_r($item);
                // echo "</pre>";
                dd($item);
            }
        }
    }
}
