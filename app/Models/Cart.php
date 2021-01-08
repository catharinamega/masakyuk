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
        $cart = DB::insert($cmd,$data);
        return $cart;
        

    }

    public function select_cart($user){
       
        $cmd = "SELECT username, b.id_bahan, nama_bahan, FORMAT(b.harga, 0, 'de_DE') `harga`, item_qty, FORMAT(subtotal, 0, 'de_DE') `subtotal`, c.stat_del FROM bahan b, cart c WHERE b.id_bahan = c.id_bahan AND username = :user;
        ";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=[
            'user' => $user
            ];
        $cart = DB::select($cmd,$data);
        return $cart;
       

    }
    
    public function plus_cart($user, $id){
       
        $cmd = "UPDATE `cart` SET `item_qty`=`item_qty` + 1, `subtotal` = `item_qty`*`harga_bahan` WHERE username = :user AND id_bahan = :id;";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=[
            'user' => $user,
            'id' => $id
            ];
        $cart = DB::update($cmd,$data);
        return $cart;
       

    }

    public function minu_cart($user, $id){
       
        $cmd = "UPDATE `cart` SET `item_qty`=`item_qty` - 1, `subtotal` = `item_qty`*`harga_bahan` WHERE username = :user AND id_bahan = :id;";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=[
            'user' => $user,
            'id' => $id
            ];
        $cart = DB::update($cmd,$data);
        return $cart;
        
    }

    // public function add_cart($data_pelanggan){
        
      
       
    //     $cmd="CALL update_pelanggan(:nama_pelanggan, :email_pelanggan, :hp_pelanggan, :username);";
       
    //     $update_akun = DB::update($cmd,$data_pelanggan);
    //     return $update_akun;
    // }
}
