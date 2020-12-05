@extends('shared/base2')

@section('judul','Resep')

@section('isi_konten')
<div class="row">
    <div class="col-md-6">
    <img class="card-img-top" src="assets/img/resep/{{ $detail_resep[0]->gambar_resep}}" alt="Card image cap">
    </div>
    <div class="col-md-6">

      <div class="row">
        <h1>{{$detail_resep[0]->judul_resep}}</h1>
      </div>

      <div class="row">
        <div class="col-md-4">
            <h3>{{$detail_resep[0]->porsi}}</h3>
            <br>
            <p>Porsi</p>
        </div>
        <div class="col-md-4">
            <h3>{{$detail_resep[0]->durasi}} menit</h3>
            <br>
            <p>Durasi Masak</p>
        </div>
        <div class="col-md-4">
            <h3>{{$detail_resep[0]->jenis_kategori}}</h3>
            <br>
            <p>Kategori</p>
        </div>
      </div>

      <div class="row">
      <button type="button" class="btn btn-primary">Beli Bahan</button>
      </div>

    </div>
</div>

<div class="container">
    <p>{{$detail_resep[0]->penjelasan_resep}}</p>
</div>

<div class="row">

    <div class="col-md-4">
        <h3>Bahan:</h3> <br>
        @foreach($detail_resep as $rsp)
        <p>- {{$rsp->bahan}}</p>
        @endforeach
    </div>

    <div class="col-md-8">
        <p>{{$detail_resep[0]->prosedur_resep}}</p>
    </div>
</div>
@endsection