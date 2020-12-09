@extends('shared/base2')

@section('judul','Hubungi Kami')

@section('isi_konten')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px;">
        <h1>Hubungi Kami</h1>
    </div>
    <form style="margin-top:30px; margin-left:40px;margin-bottom:40px;" action="{{url('sendemail/send')}}">
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputprovinsi">Nama</label>
                <input type="provinsi" class="form-control" id="inputprovinsi" placeholder="Nama">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left;">
                <label for="inputkota">Alamat Email</label>
                <input type="text" class="form-control" id="inputkota" placeholder="Alamat Email">
            </div>
            <div class="form-group col-md-3" style="padding-left:20px;text-align:left;">
                <label for="input_hp_pelanggan">Nomor Telepon (opsional)</label>
                <input type="number" class="form-control" id="inputhp_pelanggan" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputkecamatan">Subjek</label>
                <input type="text" class="form-control" id="inputkecamatan" placeholder="Subjek">
            </div>
        </div>
        <div class="form-group col-md-8" style="text-align:left;padding-left:0px;">
            <label for="inputalamat">Komentar</label>
            <textarea class="form-control" rows="3" id="inputalamat" name="text" placeholder="Komentar"></textarea>
        </div>
        
        <div style="margin-left:180px;">
            <button type="submit" class="btn btn-light shadow rounded" style="background-color:#ADF0E4; width:150px;">Kirim</button>
        </div>

    </form>
</div>
@endsection