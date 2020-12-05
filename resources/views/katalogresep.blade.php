@extends('shared/base')

@section('judul','Daftar Resep')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('background_jumbotron')
    background-image: url('assets/img/pisang.png');
@endsection
@section('judul_jumbotron','Daftar Resep')

@section('isi_konten')

    <!-- katalog resep -->
    
    <section id="portfolio" class="portfolio bg-light pb-4">
        
            <div class="row" style="padding-left:80px;">
                @foreach($resep as $rsp)
                
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="/resep/{{$rsp->id_resep}}">
                                <img class="card-img-top" src="assets/img/resep/{{ $rsp->gambar_resep}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{$rsp->judul_resep}}</h5>
                                <br>
                                <h6 class="card-title">{{$rsp->durasi}} Menit</h6>
                                <p class="card-text">{{Str::limit($rsp->penjelasan_resep,100)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          
    </section>

@endsection

