<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Pelanggan extends Model
{
    use HasFactory;
    private $tabel_terpilih = 'pelanggan';

    public function get_data($data){
        $cmd = 'SELECT username, nama_pelanggan, email_pelanggan,hp_pelanggan'.
                'FROM '.$this->tabel_terpilih.' '.
                'WHERE email_pelanggan=:email_pelanggan;';

        //DB::setFetchMode(PDO::FETCH_ASSOC);
        $res = DB::select($cmd,$data);

        $data_res = [
            'username'  => $res[0]->username,
            'nama_pelanggan'  => $res[0]->nama_pelanggan,
            'email_pelanggan'     => $res[0]->email_pelanggan,
            'hp_pelanggan'     => $res[0]->hp_pelanggan,
            'password'         => $res[0]->password, 
            
        ];

        return $data_res;
    }

    public function isExist($data){
        // ini yg bener
        $cmd = "SELECT count(*) is_exist ".
                "FROM ".$this->tabel_terpilih." ".
                "WHERE email_pelanggan=:email_pelanggan AND password=sha1(:password);";

        // ini coba-coba
        // $cmd = 'SELECT username, nama_pelanggan, email_pelanggan,hp_pelanggan'.
        //         ' FROM '.$this->tabel_terpilih;

        $res = DB::select($cmd,$data);

        //coba"
        // echo "<pre>";
        // var_dump($res);
        // echo "</pre>";
        // foreach($res as $row){
        //     echo $row->username;
        //     echo "&nbsp;";
        //     echo $row->nama_pelanggan;
        //     echo "<br> <br>";

        // }
        // die;

        //ini beneran
        if($res[0]->is_exist == 1){
            return true;
        }
        return false;

        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    public function buat($data){
        //INSERT into pelanggan(username, password, email, phone, gender) values (?, ?, ?, ?);
        $cmd = "INSERT INTO ".$this->tabel_terpilih."(nama_pelanggan, username, email_pelanggan, hp_pelanggan, password) 
        VALUES (:nama_pelanggan, :username, :email_pelanggan, :hp_pelanggan, sha1(:password) );";
        
        $res= DB::insert($cmd, $data);
        /*echo "<pre>";
        print_r($res);
        echo "</pre>";
        die();*/
        return $res;
    }

    
}
