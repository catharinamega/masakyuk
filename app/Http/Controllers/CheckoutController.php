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
        $alamat = $chk->get_alamat($username_login);
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
        // dd($alamat);
        // die;
        return view('checkout',compact('item'),compact('alamat'));
    }

    // public function tampil_pembayaran(){
    //     return view('pembayaran');
    // }

    public function tipe_pembayaran(Request $request){
        // $data = array(
        //     'ovo'      => $request->input('ovo'),
        //     'gopay'  => $request->input('gopay'),
        //     'bca'     => $request->input('bca'),
        //     'mandiri'    => $request->input('mandiri')
        //   );
        $data=$_POST['pembayaran'];
        // dd($data);
        // die;
        if ($data == 1){
            $data= ['tipe_pembayaran'=>'gopay'];
            dd($data);
            die;
        }elseif($data == 2){
            $data= ['tipe_pembayaran'=>'ovo'];
        }elseif($data == 3){
            $data= ['tipe_pembayaran'=>'bca'];
        }elseif($data == 4){
            $data= ['tipe_pembayaran'=>'mandiri'];
        }
        // dd($data);
        // die;
        return view('pembayaran',compact('data'));
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
