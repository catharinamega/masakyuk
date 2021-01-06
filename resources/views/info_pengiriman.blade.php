@extends('shared/base2')

@section('judul','Info Pengiriman')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('isi_konten')

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px;">
        <h1>Info Pengiriman</h1>
    </div>
    <div style="margin-top:30px;">
        <div style="margin-left:20px; text-align: left;">
            <h5>Pengiriman produk-produk MasakYuk dapat dilakukan dengan 2 cara, yaitu:</h5>
            <div class="row" style="margin-bottom:50px;">
                <table class="table table-borderless">

                    <tbody>
                        <tr>
                            <td style='width: 20%;'>
                                <div>
                                    <img src="assets/img/gosend.png" alt="gosend.png" style="width:120px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>Gosend</h5>
                                    <p>MasakYuk akan mengirimkan produk anda dengan Gosend dan kemudian mengakumulasi harga pengiriman dengan total pembelian.</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 20%;'>
                                <div>
                                    <img src="assets/img/grab.png" alt="grab.png" style="width:120px;">
                                </div>
                            </td>
                            <td>
                                <div class="container" style="text-align:left; padding-top:20px;">
                                    <h5>GrabExpress</h5>
                                    <p>MasakYuk akan mengirimkan produk anda dengan GrabExpress dan kemudian mengakumulasi harga pengiriman dengan total pembelian.</p>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>
</div>
@endsection
