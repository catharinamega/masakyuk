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
    <div class="container" style="margin-top:20px; margin-bottom:50px;">
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
    <!-- bagian shopping catalog -->

    <?php 
        if(isset($_POST)){
            //1. INPUT
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            //2. PROSES
            if(isset($_POST['bahan_beli'])){
                $item = array();
                foreach($_POST['bahan_beli'] as $p){
                    if(isset($p['id'])){
                        $temp=[
                            'id' => $p['id'],
                            'qty'=> $p['qty'],
                        ];
                        array_push($item,$temp);
                    }
                }
                //3. OUTPUT
                echo "<pre>";
                print_r($item);
                echo "</pre>";
            }
        }
    ?>

    <div class="container" style="margin-top:20px; margin-bottom:40px;">
        <div class="row" style="margin-bottom:30px;">
            <div class="col-md-12" style="text-align: left;">
                <h3>Belanja Yuk</h3>
            </div>
            <div class="col-md-12 row mt-4">
                <div class="col-md-1" style="text-align: left;"></div>
                <div class="col-md-4" style="text-align: left;"><h5>Bahan</h5></div>
                <div class="col-md-2" style="text-align: left;"><h5>Harga</h5></div>
                <div class="col-md-3" style="text-align: center;"><h5>Jumlah</h5></div>
                <div class="col-md-2" style="text-align: left;"></div>
            </div>
            <?php $index = 0; ?>
            <form action="/addtocart" class="col-md-12 row mt-4" method="POST">
            @csrf
            @foreach($bahan_resep as $rsp)
            <div class="col-md-12 row mt-4">
                    <input type="checkbox" class="col-md-1" name='bahan_beli[{{$rsp->id_bahan}}][id]' value='{{$rsp->id_bahan}}'>
                    <div class="col-md-4" style="text-align: left;">{{$rsp->nama_bahan}}</div>
                    <div class="col-md-2" style="text-align: left;">Rp {{$rsp->harga}}</div>
                    <div class="col-md-3" style="text-align: left;">
                        <div class="qty">
                            <span class="minus{{$index}} minus bg-dark ">-</span>
                            <input type="number" class="count{{$index}} count" name="bahan_beli[{{$rsp->id_bahan}}][qty]" value="{{$rsp->rec_beli}}">
                            <span class="plus{{$index}} plus bg-dark ">+</span>
                        </div>
                    </div>
                    <!-- <div class="col-md-2" style="text-align: left;">
                    </div> -->
                    <!-- <button type="button" class="btn btn-light" style="width: 180px; background-color: #B0FFF1">Tambah ke Keranjang</button> -->
                    <?php $index++; ?>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-light" style="width: 200px; height: 65px; background-color: #A3CCF1"><strong>Tambah Semua Pilihan ke Keranjang</strong></button>
        <button type="button" class="btn btn-light" style="width: 200px; height: 65px; background-color: #76CBFC; margin-left:30px;"><strong>Beli Sekarang</strong></button>
        </div>
        </form>
    </div>

    
@endsection