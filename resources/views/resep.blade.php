@extends('shared/base2')

@section('judul','Resep')

@section('isi_konten')
    <div class="row" style="margin-top:15px;">
        <div class="col-md-6" style="padding: 10px; height:300px;">
            <img class="card-img-top" src="../assets/img/resep/{{ $detail_resep[0]->gambar_resep}}" alt="Card image cap" style="border-radius: 12px; width:450px; height: 100%; border: 3px solid #000; padding: 5px;">
        </div>
        
        <div class="col-md-5">
            <div class="row">
                <h1>{{$detail_resep[0]->judul_resep}}</h1>
            </div>

            <div class="row" style="margin-top:20px;">
                <div class="col-md-4">
                    <h3>{{$detail_resep[0]->porsi}}</h3>
                    <!-- <br> -->
                    <p>Porsi</p>
                </div>
                <div class="col-md-4">
                    <h3>{{$detail_resep[0]->durasi}} menit</h3>
                    <!-- <br> -->
                    <p>Durasi Masak</p>
                </div>
                <div class="col-md-4">
                    <h3>{{$detail_resep[0]->jenis_kategori}}</h3>
                    <!-- <br> -->
                    <p>Kategori</p>
                </div>
            </div>

        
            <div class="text-center" style="margin-top: 30px;">
                <button type="button" class="btn btn-primary" style="width: 200px;">Beli Bahan</button>
            </div>

        </div>
    </div>

    <div class="container" style="text-align: left;">
        <p>{{$detail_resep[0]->penjelasan_resep}}</p>
    </div>

    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-4" style="text-align: left;">
                <h4>Bahan:</h4>
                @foreach($detail_resep as $rsp)
                <p>- {{$rsp->bahan}}</p>
                @endforeach
            </div>

            <div class="col-md-8" style="text-align: left;">
                <h4>Cara Membuat:</h4>
                <!-- <p>{{$detail_resep[0]->prosedur_resep}}</p> -->
                @foreach($proc_resep as $proc)
                <p>{{$proc}}</p>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12" style="text-align: left;">
                <h4>Belanja Yuk</h4>
            </div>
            @foreach($bahan_resep as $rsp)
                <div class="col-md-2" style="text-align: left;">a</div>
                <div class="col-md-3" style="text-align: left;">{{$rsp->nama_bahan}}</div>
                <div class="col-md-3" style="text-align: left;">{{$rsp->harga}}</div>
                <div class="col-md-2" style="text-align: left;">a</div>
                <div class="col-md-2" style="text-align: left;">a</div>
            @endforeach
        </div>
    </div>
@endsection