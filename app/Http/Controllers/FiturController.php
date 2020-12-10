<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Alert;

class FiturController extends Controller
{

    public function hubungi_kami(){
        return view('hubungikami');
        
    }

    public function send_email(Request $request){
        $this->validate($request, [
            'nama'     =>  'required',
            'alamat_email'  =>  'required|email',
            'subjek' =>  'required',
            'komentar' =>  'required'
           ]);
              $berhasil= 0;
              $data = array(
                'nama'      => $request->input('nama'),
                'alamat_email'  => $request->input('alamat_email'),
                'subjek'     => $request->input('subjek'),
                'hp_pelanggan'    => $request->input('hp_pelanggan'),
                'komentar'   => $request->input('komentar')
              );
      
        //    Mail::to('masakyukgan@gmail.com')->send(new SendMail($data));
    //    return back()->with('success', 'Thanks for contacting us!');
            // Session::flash('success', 'Terima kasih telah menghubungi kami.
            // Tanggapan Anda akan segera kami proses.');
            // return redirect('/hubungikami');
            // try{
            //     Mail::send('email',['alamat_email'=> $request->alamat_email,'nama' => $request->nama, 'subjek' => $request->subjek, 'komentar'=> $request->komentar, 'hp_pelanggan'=> $request->hp_pelanggan], function ($message) use ($request)
            //     {
            //         $message->subject($request->judul);
            //         $message->from('donotreply@kiddy.com', 'Kiddy');
            //         $message->to($request->email);
            //     });
            //     return back()->with('alert-success','Berhasil Kirim Email');
            // }
            // catch (Exception $e){
            //     return response (['status' => false,'errors' => $e->getMessage()]);
            // }

            try{
                Mail::send('email',$data, function($data) use($request){
                    $data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email');
                    $data->from(env('MAIL_USERNAME','masakyukgan@gmail.com'),'Verifikasi Akun email anda');
                    
                    // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
                });
            }catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
            }
        // if($berhasil == 1){
        //     Session::flash('success', 'Terima kasih telah menghubungi kami.
        //     Tanggapan Anda akan segera kami proses.');
            return redirect('/hubungikami');
        // }
        
    }



    public function faq(){
        return view('faq');

    }

    public function sdank(){
        return view('sdank');
        
    }

    public function info_pembayaran(){
        return view('info_pembayaran');
        
    }

    public function info_pengiriman(){
        return view('info_pengiriman');
        
    }
}
