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
                        ];
                        array_push($item,$temp);
                    }
                }
                dd($item);
                die;
                //3. OUTPUT
                // echo "<pre>";
                // print_r($item);
                // echo "</pre>";
            }
        }
    }
}
