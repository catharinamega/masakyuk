@extends('shared/base2')

@section('judul','Keranjang')

@section('isi_konten')

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">
        <h1>Keranjang</h1>
    </div>

    <div class="row" style="margin-bottom:30px;">
        <div class="col-md-12 row mt-4" style="margin-left:0px;">
            <div class="col-md-1" style="text-align: left;"></div>
            <div class="col-md-4" style="text-align: center;"><h5>Bahan</h5></div>
            <div class="col-md-2" style="text-align: center;"><h5>Harga</h5></div>
            <div class="col-md-3" style="text-align: center;"><h5>Jumlah</h5></div>
            <div class="col-md-2" style="text-align: center;"><h5>Total</h5></div>
        </div>

        
        <div class="col-md-12 row mt-4" style="margin-left:0px;">
            <input type="checkbox" class="col-md-1" style="margin-top:5px; width:20px; height:20px;">
            <div class="col-md-4" style="text-align: left;">Nama Bahan</div>
            <div class="col-md-2 row" style="text-align: left;padding-left:20px;">
                <div class=col-md-3>Rp</div>
                <div class=col-md-9 style="text-align:right;">70000</div>
            </div>
            <div class="col-md-3" style="text-align: left; margin-left:8px;padding-left:60px;">
                <div class="qty">
                    <span class="minus bg-dark ">-</span>
                    <input type="number" class="count" value="2">
                    <span class="plus bg-dark ">+</span>
                </div>
            </div>
            <div class="col-md-2 row" style="text-align: left;padding-left:20px; margin-left:20px;">
                <div class=col-md-3>Rp</div>
                <div class=col-md-9 style="text-align:right;">70000</div>
            </div>
        </div>

    </div>
        <div class="d-flex justify-content-end" style="text-align:left; margin-bottom:50px; margin-top:30px;">
            <button type="submit" class="btn btn-light" style="background-color:#ADF0E4; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><strong>Lanjut ke Pembayaran</strong></button>
        </div>
</div>
@endsection