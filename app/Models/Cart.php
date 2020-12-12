<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function get_cart($user, $id, $qty, $harga){
       
        $cmd = "CALL ngatur_cart(:user, :id, :qty, :harga);";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=[
            'user' => $user,
            'id' => $id,
            'qty' => $qty,
            'harga' => $harga
            ];
        $cart = DB::select($cmd,$data);
        return $cart;
        // dd($resep);
        // die;

    }
    // public function add_cart($data_pelanggan){
        
      
       
    //     $cmd="CALL update_pelanggan(:nama_pelanggan, :email_pelanggan, :hp_pelanggan, :username);";
       
    //     $update_akun = DB::update($cmd,$data_pelanggan);
    //     return $update_akun;
    // }
}
