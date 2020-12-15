@extends('shared/base2')

@section('judul','Pembayaran')

@section('isi_konten')

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">
        <h1>Pembayaran</h1>
       
    </div>

    <div style="margin-top:10px;">
        <div style="margin-left:20px; text-align: left;">
            <h5>Total Pembayaran: Rp 90.000</h5>
            <hr style="width:50%;text-align:left;margin-left:0; border-top: 1px solid black;">
            @if($data['tipe_pembayaran'] == 'bca')    
            <p>Metode Pembayaran: Bank BCA</p>
            <p style="margin-bottom:0px;">Nomor Rekening:</p>
            <input type="text" value="041234567" id="norek" style="width:150px;" readonly>
            @endif

            @if($data['tipe_pembayaran'] == 'mandiri')    
            <p>Metode Pembayaran: Bank Mandiri</p>
            <p style="margin-bottom:0px;">Nomor Rekening:</p>
            <input type="text" value="145536457" id="norek" style="width:150px;" readonly>
            @endif

            @if($data['tipe_pembayaran'] == 'gopay')    
            <p>Metode Pembayaran: Gopay</p>
            <p style="margin-bottom:0px;">Nomor Hp:</p>
            <input type="text" value="085692414563" id="norek" style="width:150px;" readonly>
            @endif

            @if($data['tipe_pembayaran'] == 'ovo')    
            <p>Metode Pembayaran: OVO</p>
            <p style="margin-bottom:0px;">Nomor Hp:</p>
            <input type="text" value="085692414563" id="norek" style="width:150px;" readonly>
            @endif
            <button class="btn btn-link" style="width:80px;" onclick="myFunction()">Salin</button>

            <hr style="text-align:left;margin-left:0;border-top: 2px solid black;">
    
@if($data['tipe_pembayaran'] == 'bca')
<!-- Petunjuk BCA -->
            <div id="accordion">
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseBCA1">
                            Petunjuk Transfer mBanking
                        </a>
                    </div>
                    <div id="collapseBCA1" class="collapse show" data-parent="#accordion"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih m-Transfer > rekening BCA </li>
                                <li>Masukkan nomor rekening 041234567 dan pilih Send. </li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama penerima adalah Denisa dan total tagihan sudah benar. Jika benar pilih Ya. </li>
                                <li>Masukkan PIN m-BCA Anda dan pilih OK </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseBCA2">
                            Petunjuk Transfer iBanking
                        </a>
                    </div>
                    <div id="collapseBCA2" class="collapse" data-parent="#accordion"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih Transfer Dana > rekening BCA</li>
                                <li>Masukkan nomor rekening 041234567 dan pilih Lanjutkan</li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama penerima adalah Denisa dan total tagihan sudah benar. Jika benar pilih Ya.</li>
                                <li>Masukkan respon KeyBCA Anda dan klik Kirim</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseBCA3">
                            Petunjuk Transfer ATM
                        </a>
                    </div>
                    <div id="collapseBCA3" class="collapse" data-parent="#accordion"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih Transaksi Lainnya > Transfer > Ke Rek BCA </li>
                                <li>Masukkan nomor rekening 041234567 dan pilih Benar.</li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama yang tertera adalah Denisa dan total tagihan sudah benar. Jika benar pilih Ya</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<br><br>
@endif


@if($data['tipe_pembayaran'] == 'mandiri')
<!-- Petunjuk Mandiri -->
            <div id="accordionM">
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseOVO1">
                            Petunjuk Transfer mBanking
                        </a>
                    </div>
                    <div id="collapseOVO1" class="collapse show" data-parent="#accordionM"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih Bayar/Beli</li>
                                <li>Pilih m-Transfer > rekening Mandiri</li>
                                <li>Pilih m-Transfer > rekening Mandiri dan pilih Benar</li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama yang tertera adalah Denisa
                                    dan total tagihan sudah benar. Jika benar, tekan angka 1 dan pilih Ya.</li>
                                <li>Periksa layar konfirmasi dan pilih Ya</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseOVO2">
                            Petunjuk Transfer iBanking
                        </a>
                    </div>
                    <div id="collapseOVO2" class="collapse" data-parent="#accordionM"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih Transfer Dana > rekening Mandiri</li>
                                <li>Masukkan nomor rekening 145536457 dan pilih Lanjutkan.</li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama penerima adalah Denisa dan
                                    total tagihan sudah benar. Jika benar pilih Ya.</li>
                                <li>Masukkan pin token anda dan klik Kirim</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseOVO3">
                            Petunjuk Transfer ATM
                        </a>
                    </div>
                    <div id="collapseOVO3" class="collapse" data-parent="#accordionM"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Pilih Transaksi Lainnya > Transfer > Ke Rek Mandiri </li>
                                <li>Masukkan nomor rekening 145536457 dan pilih Benar.</li>
                                <li>Periksa informasi yang tertera di layar. Pastikan nama yang tertera adalah Denisa
                                    dan total tagihan sudah benar. Jika benar pilih Ya</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

<br><br>
@endif

@if($data['tipe_pembayaran'] == 'gopay')
<!-- Petunjuk Gopay -->
            <div id="accordionG">
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapsegopay">
                            Petunjuk Pembayaran dengan Gopay
                        </a>
                    </div>
                    <div id="collapsegopay" class="collapse show" data-parent="#accordionG"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Bukalah aplikasi Gojek</li>
                                <li>Pada menu utama silahkan tekan Bayar. Akan muncul tampilan menu Transfer</li>
                                <li>Pada pojok kiri bawah pilih Nomor HP. Akan muncul menu Bayar lewat nomor HP</li>
                                <li>Silahkan masukkan nomor 085692414563 atas nama Mega</li>
                                <li>Masukkan nominal yang akan anda transfer dan tekan konfirmasi</li>
                                <li>Tekan Bayar</li>
                                <li>Masukkan Pin Gopay</li>
                                <li>Pembayaran berhasil dilakukan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

<br><br>
@endif


@if($data['tipe_pembayaran'] == 'ovo')
<!-- Petunjuk OVO -->
    <div id="accordionO">
                <div style="text-align:left; width:800px;">
                    <div class="card-header" style="text-align:left; width:700px; background-color:#E9EAEB;">
                        <a class="card-link" data-toggle="collapse" href="#collapseOvo">
                            Petunjuk Pembayaran dengan OVO
                        </a>
                    </div>
                    <div id="collapseOvo" class="collapse show" data-parent="#accordionO"
                        style="text-align:left; width:700px;">
                        <div class="card-body" style="text-align:left; width:700px;">
                            <ol>
                                <li>Bukalah aplikasi OVO</li>
                                <li>Klik menu Transfer yang ada di halaman depan</li>
                                <li>Masukkan nominal yang ingin ditransfer. (Diinformasikan bahwa minimal pembayaran adalah Rp10.000)</li>
                                <li>Pilih transfer Antar OVO</li>
                                <li>Masukkan nomor ponsel tujuan transfer 085692414563 atas nama Mega</li>
                                <li>Isi formulir transfer dengan baik dan benar</li>
                                <li>Klik Transfer</li>
                                <li>Cek informasi yang ditampilkan apakah sudah sesuai, kemudian klik Konfirmasi</li>
                                <li>Masukkan kode keamanan atau security code akun OVO Anda</li>
                                <li>Akan muncul pemberitahuan di layar apabila transfer berhasil dilakukan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
@endif

            <div class="d-flex justify-content-end" style="text-align:left; margin-bottom:50px; margin-top:30px;">
                <a href="/riwayattransaksi" type="submit" class="btn btn-light" style="background-color:#B2DEF0; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><strong>Bayar</strong></a>
            </div>
        </div>
    </div>
</div>



<script>
function myFunction() {
  var copyText = document.getElementById("norek");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
//   alert("Copied the text: " + copyText.value);
}
</script>
@endsection