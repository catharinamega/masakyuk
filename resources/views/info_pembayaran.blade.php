@extends('shared/base2')

@section('judul','Info Pembayaran')

@section('isi_konten')

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px;">
        <h1>Info Pembayaran</h1>
    </div>
    <div style="margin-top:30px;">
        <div style="margin-left:20px; text-align: left;">
            <h5>Pembayaran produk-produk MasakYuk dapat dilakukan melalui 4 media, yaitu:</h5>
            <div class="row">
                <table class="table table-borderless">

                    <tbody>
                        <tr>
                            <td style='width: 30%;'>
                                <div>
                                    <img src="assets/img/ovo.png" alt="ovo.png" style="width:200px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>OVO</h5>
                                    <p style="margin-bottom:0px;">a/n Mega</p>
                                    <p>0856-9241-4563</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 30%;'>
                                <div>
                                    <img src="assets/img/gopay.png" alt="gopay.png" style="width:200px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>Gopay</h5>
                                    <p style="margin-bottom:0px;">a/n Mega</p>
                                    <p>0856-9241-4563</p> 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 30%;'>
                                <div>
                                    <img src="assets/img/mandiri.png" alt="mandiri.png" style="width:200px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>Mandiri</h5>
                                    <p style="margin-bottom:0px;">a/n Denisa</p>
                                    <p>145536457</p> 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 30%;'>
                                <div>
                                    <img src="assets/img/bca.png" alt="bca.png" style="width:200px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>BCA</h5>
                                    <p style="margin-bottom:0px;">a/n Denisa</p>
                                    <p>041234567</p> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="margin-left:20px; text-align: left; margin-bottom:50px;">
        <p>Seluruh pembayaran akan diperiksa secara otomatis oleh MasakYuk dan pesanan akan segera dikirim setelah pembayaran dinyatakan valid.</p>
    </div>
</div>
@endsection
