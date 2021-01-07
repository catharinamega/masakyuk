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
            // dd($data);
            // die;
        }elseif($data == 2){
            $data= ['tipe_pembayaran'=>'ovo'];
        }elseif($data == 3){
            $data= ['tipe_pembayaran'=>'bca'];
        }elseif($data == 4){
            $data= ['tipe_pembayaran'=>'mandiri'];
        }
        // dd($data);
        // die;

        
        $usr = new Checkout;
        $user = Session::get('login');
        $alamat = $_POST['alamat'];
        $pembayaran = $_POST['pembayaran'];
        $pengiriman = $_POST['pengiriman'];
        $harga = $_POST['total'];
        $trans = $usr->add_transaksi($user, $alamat, $pembayaran, $pengiriman, $harga, 10000);
        $id_trans = $usr->get_id_transaksi();
        foreach ($id_trans as $idt){
            $idt = get_object_vars($idt);
            $id = $idt['id_transaksi'];
        }
        
        $daftar_bahan = $_POST['bahan_chk'];
        foreach($daftar_bahan as $bhn){
            $usr->add_detail_transaksi($id, $bhn['id'], $bhn['qty'], $bhn['harga']);
            $usr->min_cart($user, $bhn['id']);
        }


        return view('pembayaran',compact('data'));
    }

    public function riwayat_transaksi(){
        $usr = new Checkout;
        $username_login = Session::get('login');
        $riwayat = $usr->get_all($username_login);
        $jumlah = count($riwayat);
        // dd($jumlah);

        return view('riwayat',compact('riwayat'),compact('jumlah'));
    }
    
    public function detail_pesanan($id){
        $usr = new Checkout;
        $detail = $usr->get_detail($id);
        $daftar_bahan = $usr->daftar_bahan($id);
        return view('detail',compact('detail','daftar_bahan'));
    }

    public function add_transaksi(){
        $usr = new Checkout;
        $user = Session::get('login');
        $alamat = $_POST['alamat'];
        $pembayaran = $_POST['pembayaran'];
        $pengiriman = $_POST['pengiriman'];
        $harga = $_POST['total'];
        $trans = $usr->add_transaksi($user, $alamat, $pembayaran, $pengiriman, $harga, 10000);
        $id_trans = $usr->get_id_transaksi();
        foreach ($id_trans as $idt){
            $idt = get_object_vars($idt);
            $id = $idt['id_transaksi'];
        }
        
        $daftar_bahan = $_POST['bahan_chk'];
        foreach($daftar_bahan as $bhn){
            $usr->add_detail_transaksi($id, $bhn['id'], $bhn['qty'], $bhn['harga']);
            $usr->min_cart($user, $bhn['id']);
        }
        // dd($user);
        // die;
        return redirect('/pembayaran');
    }

}
