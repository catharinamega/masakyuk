@extends('shared/base2')

@section('judul','Riwayat Transaksi')

@section('isi_konten')
<div class="container">
        <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">
            <h1>Riwayat Transaksi</h1>
        </div>
        <div style="margin-bottom:30px;">
            @foreach($riwayat as $row)
            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 25px 50px; border-radius: 12px; width: 1000px;">
                <div style="text-align:left;">
                    <h5 style="color:#11A932;">{{$row->status_pesanan}}</h5>
                    <p style="margin-bottom:2px;">{{$row->tanggal}}</p>
                    <p style="margin-bottom:2px;">Nomor Invoice : {{$row->id_transaksi}}</p>
                </div>
                <div class="d-flex justify-content-end">
                    <table class="table table-borderless" style="height:20px; margin-bottom:0px;">
                        <tbody>
                            <tr>
                                <td style="width: 75%; padding:4px;">
                                    <div>
                                        <p style="margin-bottom:8px; text-align:right;"><strong>Total Harga</strong></p>
                                    </div>
                                </td>
                                <td style="padding:4px;">
                                    <div class="container" style="text-align:right;">
                                        <p style="margin-bottom:8px;"><strong>: Rp</strong></p>
                                    </div>
                                </td>
                                <td style="padding:4px;">
                                    <div class="container" style="text-align:right;">
                                        <p style="margin-bottom:8px;"><strong>{{$row->harga}}</strong></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="d-flex justify-content-end" style="text-align:left; margin-top:5px;">
                        <button type="submit" class="btn btn-light" style="background-color:#B2DEF0; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Lihat Detail Pesanan</button>
                    </div>
            </div>
            @endforeach
        </div>

        <!-- <div style="margin-bottom:30px;">
            <div class="mt-3" style="margin-left:20px; text-align: left; outline; border: 1px solid #44628F; margin: auto; padding: 25px 50px; border-radius: 12px; width: 1000px;">
                <div style="text-align:left;">
                    <h5 style="color:#11A932;">Transaksi Berhasil</h5>
                    <p style="margin-bottom:2px;">Jumat, 16 Oktober 2020</p>
                    <p style="margin-bottom:2px;">Nomor Invoice : T000000001</p>
                </div>
                <div class="d-flex justify-content-end">
                    <table class="table table-borderless" style="height:20px; margin-bottom:0px;">
                        <tbody>
                            <tr>
                                <td style="width: 75%; padding:4px;">
                                    <div>
                                        <p style="margin-bottom:8px; text-align:right;"><strong>Total Harga</strong></p>
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
                    <div class="d-flex justify-content-end" style="text-align:left; margin-top:5px;">
                        <button type="submit" class="btn btn-light" style="background-color:#B2DEF0; width:200px; border: 2px solid #C5E0EF; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Lihat Detail Pesanan</button>
                    </div>
            </div>
        </div> -->
    </div>
@endsection