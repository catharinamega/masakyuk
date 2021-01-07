@extends('shared/base2')

@section('judul','Pertanyaan Umum')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('isi_konten')

    <div class="container">
        <div style="margin-left:20px; text-align: left; padding-top:20px;">
            <h1>Pertanyaan Umum</h1>
        </div>
        <div style="margin-top:30px;">
            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 20px; border-radius: 12px; width: 1000px;">
                <h4>Apa itu MasakYuk?</h4>
                <p>MasakYuk adalah sebuah website e-commerce yang menyediakan bahan-bahan makanan beserta resep masakan untuk Anda yang ingin serba cepat.</p>
            </div>

            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 20px; border-radius: 12px; width: 1000px;">
                <h4>Gimana Cara Bayarnya?</h4>
                <p>Pembayaran bisa dilakukan dengan cara transfer bank ataupun bayar ditempat. Setelah melakukan pembayaran, kami akan memeriksa pembayaran Anda dan segera mengirim pesanan Anda.</p>
            </div>

            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 20px; border-radius: 12px; width: 1000px;">
                <h4>Pengiriman berapa lama ya??</h4>
                <p>Setelah pembayaran Anda kami periksa, kami akan segera mengirimkan bahan-bahan Anda tepat kedepan rumah.</p>
            </div>

            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 20px; border-radius: 12px; width: 1000px;">
                <h4>Wajib bikin akun?</h4>
                <p>Tidak, kok. Anda bisa melakukan pembelian tanpa mendaftar sebagai anggota. Namun, Anda bisa melakukan transaksi dengan lebih cepat jika Anda mendaftar.</p>
            </div>
        
            <div class="mt-3 mb-5" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 20px; border-radius: 12px; width: 1000px;">
                <h4>Semua bahan selalu ready?</h4>
                <p>Tidak semua bahan selalu siap di pusat kami, namun kami akan selalu menampilkan bahan-bahan yang tersedia.</p>
            </div>
        </div>
    </div>
@endsection
