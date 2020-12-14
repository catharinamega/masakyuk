@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
<div class="container">
    <div style="margin-left:20px; text-align: left; padding-top:20px; margin-bottom:30px;">
        <h1>Alamat Saya</h1>
    </div>
</div>
    <div class="col-md-12">
    <?php $index = 0; ?>
        @foreach($alamat_saya as $alsa)
            <div class="row">
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample{{$index}}" name="groupOfDefaultRadios" style="height: 30px; width: 30px;">
                        <!-- <label class="custom-control-label" for="defaultGroupExample1" >Telepon</label><br> -->
                        <label class="custom-control-label" for="defaultGroupExample{{$index}}">Alamat {{$index +1}}</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <p style="text-align: left">{{$alsa->hp_pelanggan}}<a href="#"><i class="fas fa-trash-alt" style="margin-left:40px;"></a></i></p> -->
                    <p style="text-align: left">{{$alsa->alamat}} </p>  <br>
                </div>

            <?php $index++; ?>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-info" href="/alamatbaru" role="button" style="margin-bottom: 15px;margin-top: 40px;">Tambah Alamat Baru</a>     
            </div>
            
            <div class="col-md-4" style="text-align:right;">
                <a class="btn btn-primary" href="#" role="button" style="margin-bottom: 15px;margin-top: 40px;">Pilih Alamat</a>     
            </div>

        </div>
    </div>
@endsection