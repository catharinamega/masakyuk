@extends('shared/base2')

@section('judul','Lupa Kata Sandi')

@section('searching','/searchresep')
@section('input_search','search_resep')

@section('dropdown')
    <select style='margin-right: 10px;' name='option_user' class='form-control' id="dropdown_katalog" onchange="location = this.value;">
            <option value="" class="agan" disabled selected hidden>Resep</option>
            <option value='/katalogresep' class="agan">Resep</option>
            <option value='/katalogbahan' class="agan">Bahan</option>
    </select>
@endsection

@section('isi_konten')
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-4" style="margin-top:20px;margin-bottom:20px;margin-left:250px;">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Lupa Kata Sandi?</h2>
                  <p>Mohon masukan alamat email anda.
                    Anda akan menerima sebuah link untuk membuat kata sandi baru melalui email.</p>
                  <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                      @csrf   
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="Alamat Email" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-success btn-block" value="Kirim" type="submit">
                      </div>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
@endsection