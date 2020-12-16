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
        
        $cmd = "SELECT nama_pelanggan, p.username, email_pelanggan, hp_pelanggan,IF(p.alamat_utama IS NULL, 'Belum ada alamat utama yang dipilih', CONCAT(a.alamat, ', ', a.kecamatan, ', ', a.kota, ', ', a.kodepos, ', ', a.provinsi)) `alamat`
        FROM pelanggan p LEFT JOIN alamat_pelanggan ap ON p.alamat_utama = ap.id_alamat_pelanggan LEFT JOIN alamat a ON a.id_alamat = ap.id_alamat
        WHERE p.username =:username;";
        
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

    public function update_password($data){
        
        $data_baru =['username'=> $data['username'],
                     'password_baru'=> $data['password_baru']
                    ];
        // nunggu Eillen
        $cmd="CALL update_password_pelanggan(:password_baru, :username);";
        
        $update_password = DB::update($cmd,$data_baru);
        // dd($update_password);
        // die;
        return $update_password;
    }


    public function tambah_alamat($data_alamat){
        
        $data_baru =['provinsi'=> $data_alamat['provinsi'],
                     'kota'=> $data_alamat['kota'],
                     'kecamatan'=> $data_alamat['kecamatan'],
                     'kode_pos'=> $data_alamat['kode_pos'],
                     'alamat'=> $data_alamat['alamat']
                    ];
        // nunggu Eillen
        $cmd = "CALL insert_alamat(:alamat, :provinsi, :kecamatan, :kota, :kode_pos);";
        
        $tambah_alamat = DB::insert($cmd,$data_baru);
        // dd($tambah_alamat);
        // die;
        return $tambah_alamat;
    }

    public function pilih_id_alamat($alamat){
        $data_baru =[
                     'alamat'=> $alamat
                    ];
        $cmd = "CALL select_idalamat(:alamat);";
        $id_alamat = DB::select($cmd,$data_baru);
        return $id_alamat[0];
    }

    public function tambah_alamat_pelanggan($data_alamat){
        $data_baru =[
                     'data_alamat'=> $data_alamat['id_alamat']['id_alamat'],
                     'username' => $data_alamat['username']
                    ];
        // dd($data_baru);
        // die;
        $cmd = "CALL insert_alamat_pelanggan(:data_alamat, :username);";
        $alamat_pelanggan = DB::insert($cmd,$data_baru);
        // dd($alamat_pelanggan);
        // die;
        return $alamat_pelanggan;
        // return $id_alamat;
    }



    public function update_alamat_utama($data){
        
        $data_baru =['username'=> $data['username'],
                     'id_alamat'=> $data['id_alamat']
                    ];
        
        $cmd = "CALL update_alamat_utama(:id_alamat, :username);";
        
        $update_alamat_utama = DB::update($cmd,$data_baru);
        // dd($update_alamat_utama);
        // die;
        return $update_alamat_utama;
    }


}
