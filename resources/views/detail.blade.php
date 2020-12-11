@extends('shared/base2')

@section('judul','Detail Pesanan')

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
                                <h1>Detail Pesanan</h1>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-bottom:30px;">
            <div class="col-md-12 row" style="margin-bottom:30px;">
                <div class="col-md-6" style="margin-left:6px; text-align: left;">
                        <h5 style="color:#0029FF;">Nomor Invoice : T000000002</h5>
                        <p style="margin-bottom:2px; color:#5C5A5A;">Status: </p>
                        <p style="margin-bottom:2px;">Pesanan Selesai</p>
                        <p style="margin-bottom:2px;">Tanggal Pembelian : Sabtu, 17 Oktober 2020</p>
                    
                </div>
                <div class="col-md-5">
                    <div class="d-flex justify-content-end" style="text-align:left; margin-bottom:20px;">
                        <button type="submit" class="btn btn-light" style="background-color:#D9D6FF; width:150px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Tanya Yuk</button>
                    </div>
                    <div class="d-flex justify-content-end" style="text-align:left;">
                        <button type="submit" class="btn btn-light" style="background-color:#D9D6FF; width:150px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Beli Lagi</button>
                    </div>
                </div>
            </div>
            <hr style="text-align:left;margin-left:0;border-top: 2px solid black;">
        </div>

        <div style="text-align:left; margin-left:20px;">
            <h4>Daftar Produk</h4>
            <div class="col-md-12 row mt-4">
                <div class="col-md-5" style="text-align: center;"><h5>Bahan</h5></div>
                <div class="col-md-2" style="text-align: center;"><h5>Harga</h5></div>
                <div class="col-md-2" style="text-align: center;"><h5>Jumlah</h5></div>
                <div class="col-md-2" style="text-align: center;"><h5>Total</h5></div>
            </div>

            <!-- foreach disini -->
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
            <div class="col-md-12 row mt-4" style="margin-bottom:30px;">
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
        </div>
       
        <hr style="text-align:left;margin-left:0;border-top: 2px solid black; margin-bottom:30px;">
        <div style="text-align:left; margin-left:20px; margin-bottom:30px;">
            <h4>Pengiriman</h4>
            <p>Opsi: Grab Express</p>
            <p style="margin-bottom:5px;">Dikirim kepada: Nina</p>
            <p style="margin-bottom:5px;">Alamat:</p>
            <P style="margin-bottom:5px;">Jalan Jendral Sudirman </P>
            <p>081212121221</p>
        </div>

        <hr style="text-align:left;margin-left:0;border-top: 2px solid black; margin-bottom:30px;">
        <div style="text-align:left; margin-left:20px; margin-bottom:30px;">
            <h4>Pembayaran</h4>
            <p>Metode Pembayaran: BCA</p>
            <table class="table table-borderless" style="height:20px; width:500px;margin-bottom:0px;">
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
@endsection