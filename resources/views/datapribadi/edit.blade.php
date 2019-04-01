@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title> testing </title>
</head>
<body>
  <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  Data Pribadi
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="{{ route('datapribadi.update', $user) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nama Lengkap" name="nama" value="{{ $user->data->nama }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">NIM</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="NIM" name="nim" value="{{ $user->data->nim }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" value="{{ $user->data->jenis_kelamin }}" required> 
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Perguruaan Tinggi</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Perguruaan Tinggi" name="universitas" value="{{ $user->data->universitas }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Fakultas</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Fakultas" name="fakultas" value="{{ $user->data->fakultas }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">IPK</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="IPK" name="ipk" value="{{ $user->data->ipk }}" required>
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ $user->data->tempat_lahir }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date"  class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $user->data->tanggal_lahir }}" required>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Agama" name="agama" value="{{ $user->data->agama }}" required>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Golongan Darah</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Golongan Darah" name="golongan_darah" value="{{ $user->data->golongan_darah }}" required>
                      </div>
                    </div>

                      <div class="form-group">
                      <label class="col-sm-2 control-label">Suku Bangsa</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Suku Bangsa" name="suku_bangsa" value="{{ $user->data->suku_bangsa }}" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Alamat" name="alamat" value="{{ $user->data->alamat }}" required>
                      </div>
                    </div>

                    <div class="line line-dashed line-lg pull-in"></div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Handphone</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nomor Handphone" name="no_hp" value="{{ $user->data->no_hp }}" required>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Facebook</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Facebook" name="facebook" value="{{ $user->data->facebook }}" required>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Instagram</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Instagram" name="instagram" value="{{ $user->data->instagram }}" required>
                      </div>
                    </div>

                    <div class="line line-dashed line-lg pull-in"></div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ibu</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nama Ibu" name="nama_ibu" value="{{ $user->data->nama_ibu }}"required>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ayah</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nama Ayah" name="nama_ayah" value="{{ $user->data->nama_ayah }}" required>
                      </div>
                    </div>

                   
                    <div class="line line-dashed line-lg pull-in"></div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Minat & Bakat</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Minat & Bakat" name="minat_bakat" value="{{ $user->data->minat_bakat }}" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Keterampilan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Keterampilan" name="keterampilan" value="{{ $user->data->keterampilan }}"  required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Potensi Diri</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Potensi Diri" name="potensi" value="{{ $user->data->potensi }}" required>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Aktifitas Sosial</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Aktifitas Sosial" name="aktivitas_sosial" value="{{ $user->data->aktivitas_sosial}}" required>
                      </div>
                    </div>
                   
                    <div class="line line-dashed line-lg pull-in"></div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Bersedia Aktif di GenBi</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Ya/Tidak" name="bersedia_aktif" value="{{ $user->data->bersedia_aktif }}" required>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Saran Untuk GenBi</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Saran Untuk Pengembangan Komunitas GenBi" name="saran" value="{{ $user->data->saran }}" required>
                      </div>
                    </div>
                    
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 