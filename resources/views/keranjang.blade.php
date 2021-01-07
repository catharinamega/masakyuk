@extends('shared/base2')

@section('judul','Keranjang')

@section('searching','/searchresep')
@section('input_search','search_resep')

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
        <!-- CART -->
        <?php $index=0; ?>
        <form id="pembayaran" action="/checkout" method="GET"></form>
            @csrf
            @foreach($detail_cart as $crt)
            <div class="col-md-12 row mt-4">
                    <input type="checkbox" class="col-md-1" name='bahan_chk[{{$crt->id_bahan}}][id]' form="pembayaran" value='{{$crt->id_bahan}}' checked>
                    <div class="col-md-4" style="text-align: left;">{{$crt->nama_bahan}}</div>
                    <div class="col-md-2" style="text-align: left; padding-left:40px;">Rp
                        <input type="number" class="col-md-9" style="padding:0px; text-align: right;" name="bahan_chk[{{$crt->id_bahan}}][harga]" value="{{$crt->harga}}" readonly>
                    </div>
                    <div class="col-md-3" style="align-content: center; display: flex; flex-wrap: wrap;">
                        <div class="qty row" style="margin-left:90px;">
                            <form id="minus" action="/minucart" method="GET">
                                @csrf
                                <input type="hidden" name='bahan_beli[id]' value='{{$crt->id_bahan}}'>
                                <input type="hidden" name='bahan_beli[qty]' value='{{$crt->item_qty}}'>
                                <button type="submit" class="minu{{$index}} minus bg-dark ">-</button>
                            </form>
                                <input type="number" class="count{{$index}} count" name="bahan_beli[qty]" value="{{$crt->item_qty}}" readonly>
                            <form action="/pluscart" method="GET">
                                @csrf
                                <input type="hidden" name='bahan_beli[id]' value='{{$crt->id_bahan}}'>
                                <button type="submit" class="plus{{$index}} plus bg-dark">+</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 row" style="text-align: left; ">
                        <div class=col-md-4 style="padding-left:35px;">Rp</div>
                        <div class=col-md-8 style="text-align:right; padding:0px;">{{$crt->subtotal}}</div>
                        <!-- <h5>Rp {{$crt->subtotal}}</h5> -->
                    </div>
                    <!-- <div class="col-md-2" style="text-align: left;">
                    </div> -->
                    <!-- <button type="button" class="btn btn-light" style="width: 180px; background-color: #B0FFF1">Tambah ke Keranjang</button> -->
                    <?php $index++; ?>
            </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-end" style="text-align:left; margin-bottom:50px; margin-top:30px;">
            <button form="pembayaran" type="submit" class="btn btn-light" style="background-color:#ADF0E4; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><strong>Lanjut ke Pembayaran</strong></button>
        </div>
        

    </div>
</div>
@endsection