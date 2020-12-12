@extends('shared/base2')

@section('judul','Checkout')

@section('isi_konten')

<div class="container">
    <div style="margin-left:-55px; text-align: left; padding-top:20px;">
        <table class="table table-borderless" style="height:50px;">
            <tbody>
                <tr>
                    <td style='width: 5%; padding-top:8px; padding-left:0px;'>
                        <div>
                            <a href="/" style="color:black;">
                                <i class="fa fa-arrow-left" aria-hidden="true" style="width:40px; height:40px;"></i>
                            </a>
                        </div>
                    </td>
                    <td style="padding:0px;">
                        <div class="container" style="text-align:left;">
                            <h1>Checkout</h1>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-top:10px;">
        <div style="margin-left:20px; text-align: left;">
            <h5>Alamat Pengiriman</h5>
            <div style="text-align:left; background-color: #E9F3F5; width: 600px; border: 2px solid #C5E0EF; padding: 10px; margin-bottom:15px;">
                <p style="margin-bottom:5px;">Nina</p>
                <p style="margin-bottom:5px;">Waterfront WP 2 No. 69, Citraland, Sambikerep, Jawa Timur, 60219</p>
                <p style="margin-bottom:5px;">082516371835</p>
            </div>
            <div style="text-align:left; margin-bottom:50px;">
                <button type="submit" class="btn btn-light" style="background-color:#B2DEF0; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Pilih Alamat Lain</button>
            </div>
        </div>
    </div>
    <div class="col-md-12 row mt-4">
        <div class="col-md-5" style="text-align: center;"><h5>Bahan</h5></div>
        <div class="col-md-2" style="text-align: center;"><h5>Harga</h5></div>
        <div class="col-md-2" style="text-align: center;"><h5>Jumlah</h5></div>
        <div class="col-md-2" style="text-align: center;"><h5>Total</h5></div>
    </div>

    <div class="col-md-12 row mt-4">
        <div class="col-md-5" style="text-align: left;">Nama Bahan</div>
        <div class="col-md-2 row" >
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right;">10.000</div>
        </div>
        <div class="col-md-2" style="text-align: center; padding-left:80px;">8</div>
        <div class="col-md-2 row" style="margin-left:20px;">
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right; ">80.000</div>
        </div>
    </div>
    <div class="col-md-12 row mt-4">
        <div class="col-md-5" style="text-align: left;">Nama Bahan</div>
        <div class="col-md-2 row" >
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right;">10.000</div>
        </div>
        <div class="col-md-2" style="text-align: center; padding-left:80px;">8</div>
        <div class="col-md-2 row" style="margin-left:20px;">
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right; ">80.000</div>
        </div>
    </div>
    <div class="col-md-12 row mt-4" style="margin-bottom:60px;">
        <div class="col-md-5" style="text-align: left;">Nama Bahan</div>
        <div class="col-md-2 row" >
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right;">10.000</div>
        </div>
        <div class="col-md-2" style="text-align: center; padding-left:80px;">8</div>
        <div class="col-md-2 row" style="margin-left:20px;">
            <div class=col-md-3>Rp</div>
            <div class=col-md-9 style="text-align:right; ">80.000</div>
        </div>
    </div>

    <div class="col-md-12 row" style="margin-left:0px;">
        <div><h6>Opsi Pengiriman:</h6></div>
        <div class="btn-group" style="margin-left: 38px;">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pilih Opsi Pengiriman
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Gosend</a>
                <a class="dropdown-item" href="#">GrabExpress</a>
            </div>
        </div>
    </div>

    <div class="col-md-12 row" style="margin-left:0px; margin-top:30px; margin-bottom:30px;">
        <div><h6>Opsi Pembayaran:</h6></div>
        <div class="btn-group" style="margin-left: 30px;">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pilih Opsi Pembayaran
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">BCA</a>
                <a class="dropdown-item" href="#">Mandiri</a>
                <a class="dropdown-item" href="#">OVO</a>
                <a class="dropdown-item" href="#">Gopay</a>
            </div>
        </div>
    </div>


    <div style="margin-top:10px;">
        <div class="d-flex justify-content-end" style="margin-left:20px; text-align: center;">
            <div style="text-align:left; width: 400px; border: 2px solid #000000; padding: 15px; margin-bottom:15px;">
                <table class="table table-borderless" style="height:20px; margin-bottom:0px;">
                    <tbody>
                        <tr>
                            <td style="width: 50%; padding:4px;">
                                <div>
                                    <p style="margin-bottom:8px; text-align:left;">Total Pembelian</p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;">: Rp</p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;">90.000</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%; padding:4px;">
                                <div>
                                    <p style="margin-bottom:8px; text-align:left;">Total Ongkos Kirim</p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;">: Rp</p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;">90.000</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%; padding:4px;">
                                <div>
                                    <p style="margin-bottom:8px; text-align:left;"><strong>Total Harga</strong></p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;"><strong>: Rp</strong></p>
                                </div>
                            </td>
                            <td style="padding:4px;">
                                <div class="container" style="text-align:right;">
                                    <p style="margin-bottom:8px;"><strong>90.000</strong></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="text-align:left; margin-bottom:50px; margin-top:30px;">
            <button type="submit" class="btn btn-light" style="background-color:#B2DEF0; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><strong>Buat Pesanan</strong></button>
        </div>
    </div>
</div>
@endsection