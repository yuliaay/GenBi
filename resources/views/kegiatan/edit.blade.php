@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title> Edit Kegiatan </title>
</head>
<body>
  <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  Data Kegiatan 
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="{{ route('kegiatan.update', $activity) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Kegiatan</label>
                      <div class="col-sm-10">
                        <input type="date"  class="form-control" name="tanggal" value="{{ $activity->tanggal }}">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Peserta</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Peserta" name="peserta" value="{{ $activity->peserta }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Tempat" name="tempat" value="{{ $activity->tempat }}">
                      </div>
                    </div>


                     <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Kegiatan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nama Kegiatan" name="nama_kegiatan" value="{{ $activity->nama_kegiatan }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kegiatan</label>
                      <div class="col-sm-10">
                        <select type="text"  class="form-control" placeholder="Tingkat" name="jenis_kegiatan">
                          <option value="RUTIN/TERLAKSANA/INISIATIF"> RUTIN/TERLAKSANA/INISIATIF </option>
                          <option value="RUTIN/TERLAKSANA/PARTISIPASI"> RUTIN/TERLAKSANA/PARTISIFATIF </option>
                          <option value="SEKALI/TERLAKSANA/INISIATIF"> SEKALI/TERLAKSANA/INISIATIF </option>
                          <option value="SEKALI/TERLAKSANA/PARTISIPASI"> SEKALI/TERLAKSANA/PARTISIPASI </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Bentuk Kegiatan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Bentuk Kegiatan" name="bentuk_kegiatan" value="{{ $activity->bentuk_kegiatan }}">
                      </div>
                    </div>

                     <br>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('kegiatan.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 