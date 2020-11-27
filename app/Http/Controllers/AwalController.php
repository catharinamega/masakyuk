<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Session;

class AwalController extends Controller
{
    //landing page
    public function home(){
        //echo "Halo Kamu ngakses Controller Awal pada function index";
        //return view('form');
        return view('home');
    }

    //login
    public function login(){
        return view('login');
    }

    //authentication
    public function authentication(Request $req){
        //1. Get INPUT
        $email = $req->input('email_pelanggan');
        $pass    = $req->input('password');

        $data = [
            'email_pelanggan' => $email,
            'password' => $pass,
        ];

        //2. Check Username dan Password ke database
        $usr = new Pelanggan();

        //ini coba"
        // $data_kembalian =['daftar' => $usr->isExist($data)];
        // return view('coba',$data_kembalian);

        //beneran
        $flag_exist = $usr->isExist($data);
        
        // die;
        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::put('login', $email);
            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/home');
        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email dan Password tidak sesuai!');
            return redirect('/login');
        }
    }

    //halamannya registrasi
    public function registration(){
        return view('register');
    }
    
    public function daftar_baru(Request $req){
        $messages = array();
        $username = $req->input('username');
        $nama_pelanggan = $req->input('nama_pelanggan');
        $email_pelanggan = $req->input('email_pelanggan');
        $hp_pelanggan = $req->input('hp_pelanggan');


        $password=$req->input('password');
        $password2=$req->input('password2');

        //lakukan validasi inputan
        if ($username == ''){
            array_push($messages,'Username belum diisi.'); //$messages.add('.....');
        }

        if($nama_pelanggan == ''){
            array_push($messages,'Nama Pelanggan belum diisi.'); //$messages.add('.....');
        }

        if($password == ''){
            array_push($messages,'Password belum diisi.');
        }

        if($password2!=$password){
            // Session::flash('danger', $messages);
            array_push($messages,'Password & Ulangi Password tidak sama.'); //$messages.add('.....');
        }

        //echo "<pre>";
        // var_dump($messages);
        //echo "</pre>";
        // die();

        if (isset($messages) && count($messages)>0){
            Session::flash('danger', $messages);
            return redirect('/register');
        }

        $usr = new Pelanggan();

        /*$data = [
            'username' => 'jwijaya',
            'password' => 'webdevjaya',
            'email'    => 'halo@jmswijaya.com',
            'phone'    => '081342469097',
            'gender'   => 'M',
        ];*/
        $data = [
            'nama_pelanggan'  => $req->input('nama_pelanggan'),
            'username'  => $req->input('username'),
            'email_pelanggan'     => $req->input('email_pelanggan'),
            'hp_pelanggan'    => $req->input('hp_pelanggan'),
            'password'     => $req->input('password'),
            
        ];

        $res = $usr->buat($data);
        if($res==1){
            //echo "Berhasil Insert Data User!";
            Session::flash('success', 'Anda berhasil membuat akun!');

            return redirect('/login');
        }
    }

}
