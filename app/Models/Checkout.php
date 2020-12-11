<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Checkout extends Model
{
    use HasFactory;
    public function get_all($username_login){
        $cmd = "CALL select_riwayat(:username);";

        $data=['username'=> $username_login];
        $riwayat_transaksi = DB::select($cmd,$data);
        // dd($riwayat_transaksi);
        return $riwayat_transaksi;


    }
}
