@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
    <h1 style="margin-left: 30px;">Alamat Saya</h1><br>
    <div class="col-md-12">
        @foreach($alamat_saya as $alsa)
            <div class="row">
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="defaultGroupExample1" >Telepon</label><br>
                        <label style="margin-top:20px;">Alamat</label> 
                     </div>
                </div>

                <div class="col-md-4">
                    <p style="text-align: left">{{$alsa->hp_pelanggan}}<a href="#"><i class="fas fa-trash-alt" style="margin-left:40px;"></a></i></p>
                    <p style="text-align: left">{{$alsa->alamat}} </p>  <br>
                </div>


            </div>
        @endforeach
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-info" href="#" role="button" style="margin-bottom: 15px;margin-top: 40px;">Tambah Alamat Baru</a>     
            </div>
            
            <div class="col-md-4">
                <a class="btn btn-primary" href="#" role="button" style="margin-bottom: 15px;margin-top: 40px;">Pilih Alamat</a>     
            </div>

        </div>
    </div>
@endsection