@extends('shared/base2')

@section('judul','Hubungi Kami')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('dropdown')
    <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" class="agan" disabled selected hidden>Resep</option>
            <option value='/katalogresep' class="agan">Resep</option>
            <option value='/katalogbahan' class="agan">Bahan</option>
    </select>
@endsection

@section('isi_konten')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px;">
        <h1>Hubungi Kami</h1>
    </div>
    <!-- @if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('success') }}</strong>
            </div>
    @endif -->
    <form style="margin-top:30px; margin-left:40px;margin-bottom:40px;" action="{{url('/hubungikami/send')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputprovinsi">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left;">
                <label for="inputkota">Alamat Email</label>
                <input type="text" class="form-control"  placeholder="Alamat Email" name="alamat_email" required>
            </div>
            <div class="form-group col-md-3" style="padding-left:20px;text-align:left;">
                <label for="input_hp_pelanggan">Nomor Telepon (opsional)</label>
                <input type="number" class="form-control" placeholder="Nomor Telepon" name="hp_pelanggan">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4" style="text-align:left">
                <label for="inputkecamatan">Subjek</label>
                <input type="text" class="form-control" placeholder="Subjek" name="subjek" required>
            </div>
        </div>
        <div class="form-group col-md-8" style="text-align:left;padding-left:0px;">
            <label for="inputalamat">Komentar</label>
            <textarea class="form-control" rows="3" placeholder="Komentar" name="komentar" required></textarea>
        </div>
        
        <div style="margin-left:180px;">
            <button type="submit" class="btn btn-light" style="background-color:#ADF0E4; width:150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><strong>Kirim</strong></button>
        </div>

    </form>
</div>
@endsection