<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Pelanggan extends Model
{
    use HasFactory;
    private $tabel_terpilih = 'pelanggan';
    private $tabel_alamat = 'alamat';
    private $tabel_ap = 'alamat_pelanggan';



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
                "WHERE username=:username AND password=sha1(:password);";

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


    public function get_all($param_username){
        // $akun = DB::table('pelanggan')->get(['nama_pelanggan', 'username', 'email_pelanggan', 'hp_pelanggan', 'password']);
        // return $akun;
        
        $cmd = "SELECT nama_pelanggan, p.username, email_pelanggan, hp_pelanggan, a.alamat ".
                "FROM ".$this->tabel_terpilih." p, ".$this->tabel_alamat." a, ".$this->tabel_ap." ap ". 
                "WHERE p.username=:username AND id_alamat_pelanggan = p.alamat_utama AND ap.id_alamat = a.id_alamat;";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=['username'=> $param_username];
        // 
        // supaya bisa dapatkan query log kita harus melakukan ini dulu
        // DB::enableQueryLog();
        $akun = DB::select($cmd,$data);
        // $temp_sql = DB::getQueryLog();
        // 
        // print_r($akun);
        // print_r($temp_sql);
        // die;
        return $akun[0];

    }


    // public function user()
	// {
	//       return $this->belongsTo('app\Models\User','username', 'password');
	// }


    public function update_akun($data_pelanggan){
        
      
        // nunggu Eillen
        $cmd="CALL update_pelanggan(:nama_pelanggan, :email_pelanggan, :hp_pelanggan, :username);";
       
        $update_akun = DB::update($cmd,$data_pelanggan);
        // dd($update_akun);
        return $update_akun;
    }
    

    public function tampil_alamat($username_login){
        // $akun = DB::table('pelanggan')->get(['nama_pelanggan', 'username', 'email_pelanggan', 'hp_pelanggan', 'password']);
        // return $akun;
        
        $cmd = "CALL select_alamat(:username);";
        
        //buat binding, array assosiatifnya bisa ditaruh di Model bisa ditaruh di COntroller 
        $data=['username'=> $username_login];
        $alamat_saya = DB::select($cmd,$data);
        // dd($alamat_saya);

        return $alamat_saya;

    }
}
