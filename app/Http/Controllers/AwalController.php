<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Session;
use Alert;
use Mail;

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
        $username = $req->input('username');
        $pass    = $req->input('password');

        $data = [
            'username' => $username,
            'password' => $pass
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
            Session::put('login', $username);
            Session::put('pass', $pass);
            
            // $pass_lama = Session::get('pass');
            // dd($pass_lama);
            // die;
            
            // $username_login = $data['username'];
            // $username_login->belongsToMany('App\Models\Pelanggan');

           

            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/home');
        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email dan Password tidak sesuai!');
            return redirect('/login');
        }
    }


    public function logout(Request $req){
        // Session::forget('nama');
        // Session::forget('linknya');

        // ini yg pertama
        // Session::flush();
        // Session::flash('keluar', 'Anda telah logout');
        // return redirect('/login');\

        // ini yg kedua
       
            //HATI-HATI: menghancurkan session dan set session flash
            $hasLogin = $req->session()->has('login');
            if(isset($hasLogin)){
                Session::flush();
                // Session::flash('keluar', 'Anda telah logout');
    
                return redirect('/home');
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
            'password'     => $req->input('password')
            
        ];

        $res = $usr->buat($data);
        if($res==1){
            //echo "Berhasil Insert Data User!";
            Session::flash('success', 'Anda berhasil membuat akun!');

            return redirect('/login');
        }
    }

    // Update Akun




    public function akun(){
        $username_login = Session::get('login');
        // echo $username_login;
        // die;
        $usr = new Pelanggan();

        // $akun = Pelanggan::get_all($username_login);
        // pake auth
        $akun = $usr->get_all($username_login);
        // dd($akun);
        return view('akun',compact('akun'));
    }
    
    public function update_akun(Request $req){
        // $username_login = Session::get('login');
        $usr = new Pelanggan();
        $data_pelanggan = [
            'username'      => $req->input('username'),
            'nama_pelanggan'  => $req->input('nama_pelanggan'),
            'email_pelanggan'     => $req->input('email_pelanggan'),
            'hp_pelanggan'    => $req->input('hp_pelanggan'),
            
        ];
       
        // dd($data_pelanggan);
        // die;
        $update_akun = $usr->update_akun($data_pelanggan);
        Session::flash('success', 'Anda berhasil update!');
        
        return redirect('/akun');
    }
    
    public function atur_alamat(Request $req){
        $usr = new Pelanggan();
        // $username_login = [
        //     'username'      => $req->input('username'),
        // ];
        $username_login = Session::get('login');
        // dd($username_login);
        $alamat_saya = $usr->tampil_alamat($username_login);
        $jumlah = count($alamat_saya);
        // dd($jumlah);
        // die;
        return view('alamat_saya',compact('alamat_saya'),compact('jumlah'));
    }



    public function alamat_baru(){
        
        return view('alamatbaru');
        
    }

    public function tambah_alamat(Request $req){
        $username_login = Session::get('login');
        $usr = new Pelanggan();
        $data_alamat = [
            'provinsi'      => $req->input('provinsi'),
            'kota'  => $req->input('kota'),
            'kecamatan'     => $req->input('kecamatan'),
            'kode_pos'     => $req->input('kode_pos'),
            'alamat'    => $req->input('alamat')
            
        ];
        
        // dd($data_alamat);
        // INSERT ALAMAT
        $tambah_alamat = $usr->tambah_alamat($data_alamat);
        // AMBIL ID ALAMAT
        $alamat = $data_alamat['alamat'];
        $id_alamat = $usr->pilih_id_alamat($alamat);
        // var_dump($id_alamat);
        // die;
        $id_alamat_pelanggan =  (array) $id_alamat;
        // dd($id_alamat_pelanggan);
        // INSERT ALAMAT_PELANGGAN
        $data_alamat = [
            'id_alamat'    => $id_alamat_pelanggan,
            'username'      => $username_login
        ];
        // dd($data_alamat);
        // die;
        $tambah_alamat_pelanggan = $usr->tambah_alamat_pelanggan($data_alamat);
        return redirect('/aturalamat');
    }


    public function ganti_sandi(){
        
        return view('gantikatasandi');
        
    }

    public function lupa_sandi(){
        
        return view('lupakatasandi');
        
    }

    public function kirim_email(Request $request){
        $this->validate($request, [
            'email'  =>  'required|email'
           ]);
        $berhasil= 0;
        $data = array(
                'email'  => $request->input('email')
            );

        $usr = new Pelanggan();
        $sandi_email = $usr->lupa_email($data);

        
        try{
                Mail::send('email_sandi',$data, function($data) use($request){
                    $data->to($request->email,'Verifikasi')->subject('Verifikasi Sandi');
                    $data->from(env('MAIL_USERNAME','masakyukgan@gmail.com'),'Verifikasi Sandi anda');
                    
                    // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
                });
        }catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
        }


        return redirect('/login');
        
        
        
    }

    public function update_password(Request $req){
        $usr = new Pelanggan();
        $username_login = Session::get('login');
        $pass_lama = Session::get('pass');
        // dd($pass_lama);
        // die;
        $data = [
            'pass_lama' => $pass_lama,
            'password_lama' =>$req->input('password_lama'),
            'username' => $username_login,
            'password_baru'  => $req->input('password_baru'),
            'password_baru2'  => $req->input('password_baru2')
        ];
        // dd($data);
        // die;
        if($data['pass_lama'] !== $data['password_lama']){
            Session::flash('danger', 'Password Anda tidak sesuai');
            return redirect('/gantikatasandi');
        }else{
            // dd($data);
            // die;
            $update_password = $usr->update_password($data);
            Session::flash('success', 'Anda berhasil mengubah kata sandi!');
            return redirect('/gantikatasandi');
        }

    }

    public function pilih_alamat(Request $req){
        $usr = new Pelanggan();
        $username_login = Session::get('login');
        $alamat = $_REQUEST['alamat'];
        $data =[
            'username' => $username_login,
            'id_alamat'  => $alamat
        ];
        // dd($data);
        // die;
        $alamat = $usr->update_alamat_utama($data);
        return redirect('/akun');
        
    }
}
