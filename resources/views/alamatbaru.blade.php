@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
<h1 style="margin-left: 80px;">Alamat Baru</h1><br>
<form style="margin-left:80px;margin-right:80px;margin-bottom:40px;">
    <div class="form-row" >
      <div class="form-group col-md-5" style="text-align:left">
        <label for="inputprovinsi">Provinsi</label>
        <input type="provinsi" class="form-control" id="inputprovinsi" placeholder="Provinsi">
      </div>
      <div class="form-group col-md-3" style="padding-left:20px;text-align:left;">
        <label for="input_hp_pelanggan">Nomor Telepon</label>
        <input type="number" class="form-control" id="inputhp_pelanggan" placeholder="Nomor Telepon">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-5" style="text-align:left;">
      <label for="inputkota">Kota</label>
      <input type="text" class="form-control" id="inputkota" placeholder="Kota">
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-5" style="text-align:left">
        <label for="inputkecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="inputkecamatan"placeholder="Kecamatan">
      </div>
      <div class="form-group col-md-2" style="padding-left:20px;text-align:left;">
        <label for="inputkodepos">Kode Pos</label>
        <input type="number" class="form-control" id="inputkodepos" placeholder="Kode Pos">
      </div>
    </div>
    <div class="form-group col-md-8" style="text-align:left;padding-left:0px;">
      <label for="inputalamat">Alamat</label>
      <textarea class="form-control" rows="5" id="inputalamat" name="text" placeholder="Alamat"></textarea>
    </div>
    <div class="form-group">
      <div class="form-check" style="text-align: left">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck" style="margin-bottom: 15px">
          Jadikan Sebagai Alamat Utama
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-secondary" >Nanti Saja</button>
    <button type="submit" class="btn btn-info" style="margin-left:20px">Simpan Alamat Baru</button>
 
  </form>
@endsection