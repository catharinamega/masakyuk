@extends('shared/base')

@section('judul','Daftar Resep')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('dropdown')
    <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" class="agan" disabled selected hidden>Resep</option>
            <option value='/katalogresep' class="agan">Resep</option>
            <option value='/katalogbahan' class="agan">Bahan</option>
    </select>
@endsection

@section('background_jumbotron')
    background-image: url('assets/img/pisang.png');
@endsection
@section('judul_jumbotron','Daftar Resep')

@section('isi_konten')

    <!-- katalog resep -->
    
    <section id="portfolio" class="portfolio bg-light pb-4">
        
            <div class="row" style="padding-left:80px; padding-top:30px">
                @foreach($resep as $rsp)
                
                    <div class="col-md-4">
                        <div class="card pop-up" style="width: 20rem;">
                            <div class="image-box">
                                <a href="/resep/{{$rsp->id_resep}}">
                                    <img class="card-img-top" src="assets/img/resep/{{ $rsp->gambar_resep}}" alt="Card image cap">
                                </a>
                            </div>
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

