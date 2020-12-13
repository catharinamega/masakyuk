@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px;">
        <h1>Alamat Baru</h1>
    </div>
    <form style="margin-top:30px; margin-left:20px;margin-bottom:40px;" method="POST" action="/tambahalamat">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputprovinsi">Provinsi</label>
                <input type="provinsi" class="form-control" id="inputprovinsi" name="provinsi" placeholder="Provinsi">
            </div>
            <!-- <div class="form-group col-md-3" style="padding-left:20px;text-align:left;">
                <label for="input_hp_pelanggan">Nomor Telepon</label>
                <input type="number" class="form-control" id="inputhp_pelanggan" placeholder="Nomor Telepon">
            </div> -->
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left;">
                <label for="inputkota">Kota</label>
                <input type="text" class="form-control" id="inputkota" name="kota" placeholder="Kota">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputkecamatan">Kecamatan</label>
                <input type="text" class="form-control" id="inputkecamatan" name="kecamatan" placeholder="Kecamatan">
            </div>
            <div class="form-group col-md-2" style="padding-left:20px;text-align:left;">
                <label for="inputkodepos">Kode Pos</label>
                <input type="number" class="form-control" id="inputkodepos" name="kode_pos" placeholder="Kode Pos">
            </div>
        </div>
        <div class="form-group col-md-8" style="text-align:left;padding-left:0px;">
            <label for="inputalamat">Alamat</label>
            <textarea class="form-control" rows="3" id="inputalamat" name="alamat" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
            <div class="form-check" style="text-align: left">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" style="margin-bottom: 15px">
                    Jadikan Sebagai Alamat Utama
                </label>
            </div>
        </div>
        <div style="margin-left:40px;">

            <button type="button" class="btn btn-secondary"><a href="/aturalamat" style="text-decoration: none; color: white;">Nanti Saja</a></button>
            <button type="submit" class="btn btn-info" style="margin-left:30px">Simpan Alamat Baru</button>
        </div>

    </form>
</div>
@endsection