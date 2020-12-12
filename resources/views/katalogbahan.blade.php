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
                
                    <form action="/addtocart" class="col-md-3" method="POST">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/img/bahan/{{$bhn->gambar_bahan}}" alt="Card image cap">
                            <div class="card-body">
                                <input name='bahan_beli[{{$bhn->id_bahan}}][id]' value='{{$bhn->id_bahan}}'>
                                <h5 class="card-title">{{$bhn->nama_bahan}}</h5>
                                <h6 class="card-title">{{$bhn->jumlah}}</h6>
                                <h5 class="card-title">{{$bhn->harga}}</h5>
                                <input name='bahan_beli[{{$bhn->id_bahan}}][harga]' value='{{$bhn->harga}}'>
                                <div class="qty mt-4">
                                    <span class="minu{{$index}} minus bg-dark">-</span>
                                    <input type="number" class="count{{$index}} count" name="bahan_beli[{{$bhn->id_bahan}}][qty]" value=1>
                                    <span class="plus{{$index}} plus bg-dark">+</span>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top: 15px;"onclick="tambahCounter()" id="addCart">Tambah ke Troli</button>
                            </div>
                        </div>
                    </form>
                    <?php $index++; ?>
                   
                @endforeach
            </div>
          
    </section>

@endsection
<script>
    function tambahCounter(){
            var currentCounter = document.getElementById('counterCart').innerHTML
            currentCounter = parseInt(currentCounter)
            currentCounter += 1
            document.getElementById('counterCart').innerHTML = currentCounter
            // alert(currentCounter);
    }
</script>