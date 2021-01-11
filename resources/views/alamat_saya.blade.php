@extends('shared/base2')

@section('judul','Alamat Saya')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('isi_konten')
<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">
        <h1>Alamat Saya</h1>
    </div>
</div>
    @if(!$jumlah == 0)
       
        <form action="/pilihalamat" method="POST">  
          @csrf
            <div class="col-md-12">
            <?php $index = 0; ?>
                @foreach($alamat_saya as $alsa)
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample{{$index}}" name="alamat" value="{{$alsa->id_alamat_pelanggan}}" style="height: 30px; width: 30px;">
                                <!-- <label class="custom-control-label" for="defaultGroupExample1" >Telepon</label><br> -->
                                <label class="custom-control-label" for="defaultGroupExample{{$index}}">Alamat {{$index +1}}</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- <p style="text-align: left">{{$alsa->hp_pelanggan}}<a href="#"><i class="fas fa-trash-alt" style="margin-left:40px;"></a></i></p> -->
                            <input type="hidden" style="text-align: left; width: 300px; height: 100px;" value="{{$alsa->alamat}}" readonly>
                            <p style="text-align: left;">{{$alsa->alamat}}</p>
                            <br>
                        </div>

                    <?php $index++; ?>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-info" href="/alamatbaru" role="button" style="margin-bottom: 15px;margin-top: 40px;">Tambah Alamat Baru</a>     
                    </div>
                    
                    <div class="col-md-4" style="text-align:right;">
                        <button class="btn btn-primary" type="submit" role="button" style="margin-bottom: 15px;margin-top: 40px;">Pilih Alamat</button>
                    </div>

                </div>
            </div>
        </form>

    @else
    <div class="empty">
        <i class="fas fa-8x fa-map-marked-alt mt-3 mb-4"></i><br>
        <h3 class="text-danger">Belum Ada Alamat</h3>
        <h4 >Sepertinya Belum Ada Alamat Yang Anda Tambahkan</h4>
        <a href="/alamatbaru" class="btn btn-primary btn-lg active mb-4 mt-3" role="button" aria-pressed="true" style="box-shadow: 0 8px 12px 
        0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Tambah Alamat Baru</a>
    </div>
    @endif

@endsection