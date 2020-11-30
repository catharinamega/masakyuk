@extends('shared/base')

@section('judul','Daftar Bahan')

@section('searching','/searchbahan')
@section('input_search','search_bahan')

@section('background_jumbotron')
    background-image: url('assets/img/pisang.png');
@endsection
@section('judul_jumbotron','Daftar Bahan')

@section('isi_konten')

    <!-- katalog resep -->
    
    <section id="portfolio" class="portfolio bg-light pb-4">
        
            <div class="row" style="padding-left:50px; padding-right:50px;">
            <?php $index = 0; ?>
                @foreach($bahan as $bhn)
                
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/img/bahan/{{$bhn->gambar_bahan}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$bhn->nama_bahan}}</h5>
                                <h6 class="card-title">{{$bhn->jumlah}}</h6>
                                
                                <h5 class="card-title">{{$bhn->harga}}</h5>
                                <div class="qty mt-4">
                                    <span class="minus{{$index}} minus bg-dark ">-</span>
                                    <input type="number" class="count{{$index}} count" name="qty" value="1">
                                    <span class="plus{{$index}} plus bg-dark ">+</span>
                                </div>
                                <a href="#" class="btn btn-primary" style="margin-top: 15px;">Tambah ke Troli</a>
                            </div>
                        </div>
                    </div>
                    <?php $index++; ?>
                   
                @endforeach
            </div>
          
    </section>

@endsection