@extends('shared/base2')

@section('judul','Alamat Saya')

@section('isi_konten')
    <h1>Alamat Saya</h1>
    <div class="col-md-12">
        @foreach($alamat_saya as $alsa)
            <div class="row">
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="defaultGroupExample1">Telepon</label><br>
                        <label class="custom-control-label" for="defaultGroupExample1">Alamat</label>
                     </div>
                </div>

                <div class="col-md-4">
                    <p>{{$alsa->hp_pelanggan}}</p><br>
                    <p>{{$alsa->alamat}}</p>
                </div>


            </div>
        @endforeach
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-info" href="#" role="button">Tambah Alamat Baru</a>     
            </div>
            
            <div class="col-md-4">
                <a class="btn btn-primary" href="#" role="button">Pilih Alamat</a>     
            </div>

        </div>
    </div>
@endsection