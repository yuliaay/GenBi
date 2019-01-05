@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title> testing </title>
</head>
<body>
   
 <section class="panel panel-default">
				<div class="row">
                <div class="col-sm-6">
                  <form class="form-horizontal" data-validate="parsley">
                    <section class="panel panel-default">
                      <header class="panel-heading">
                        <strong>Data Diri</strong>
                      </header>
                      <div class="panel-body">                    
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->nama }}</label>
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">NIM</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->nim }}</label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Perguruaan Tinggi</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->universitas }}</label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Universitas Jambi</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->fakultas }}</label>
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">IPK</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->ipk }}</label>
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Tempat Lahir</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->tempat_lahir }}</label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->tanggal_lahir }}</label>
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Alamat</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->alamat }}</label></div>
                            </div>                            
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-sm-3 control-label">Golongan Darah</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->golongan_darah }}</label></div>
                            </div>                            
                          </div>
                      </div>

                           <div class="form-group">
                          <label class="col-sm-3 control-label">Agama</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->agama }}</label></div>
                            </div>                            
                          </div>
                      </div>

                           <div class="form-group">
                          <label class="col-sm-3 control-label">Suku Bangsa</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->suku_bangsa }}</label></div>
                            </div>                            
                          </div>
                      </div>

                      

					</div>
                    </section>
                  </form>
                </div>
                <div class="col-sm-6">
                  <form class="form-horizontal" data-validate="parsley">
                    <section class="panel panel-default">
                      <header class="panel-heading">
                        <strong>Data Tambahan</strong>
                      </header>
                      <div class="panel-body">  
                       <div class="form-group">
                          <label class="col-sm-3 control-label">No. Handphone</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->no_hp }}</label></div>
                            </div>                            
                          </div>
                      </div>

                    <div class="form-group">
                          <label class="col-sm-3 control-label">Facebook</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->facebook }}</label></div>
                            </div>                            
                          </div>
                      </div>

                    <div class="form-group">
                          <label class="col-sm-3 control-label">Instagram</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><label class="control-label">{{ $user->data->instagram }}</label></div>
                            </div>                            
                          </div>
                      </div>

                    <div class="line line-dashed line-lg pull-in"></div>	
                  
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Nama Ayah</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->nama_ayah }}</label>  
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Nama Ibu</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->nama_ibu }}</label>
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Minat dan Bakat</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->minat_bakat }}</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Potensi Diri</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->potensi_diri }}</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Keterampilan</label>
                          <div class="col-sm-9">
                            <label class="control-label">{{ $user->data->keterampilan }}</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Aktifitas Sosial</label>
                          <div class="col-sm-9">
                           <label class="control-label">{{ $user->data->aktifitas_sosial }}</label>
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Bersedia Aktif di GenBi</label>
                          <div class="col-sm-9">
                           <label class="control-label">{{ $user->data->bersedia_aktif }}</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Saran Untuk GenBi</label>
                          <div class="col-sm-9">
                           <label class="control-label">{{ $user->data->saran }}</label>
                          </div>
                        </div>

                        
                      <footer class="panel-footer text-right bg-light lter">
                       <a href="{{ route('datapribadi.edit') }}" class="btn btn-success">Edit Data</a>
                      </footer>
                    </section>
                  </form>
                </div>
              </div>
              </section>
          
          
</body>
</html>
@endsection 