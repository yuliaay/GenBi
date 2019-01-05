@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title> Tambah Kegaitan </title>
</head>
<body>
  <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  Data Pertemuan 
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="{{ route('pertemuan.store') }}">
                    {{ csrf_field() }}

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Pertemuan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="pertemuan" placeholder="Nama Pertemuan">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Pertemuan</label>
                      <div class="col-sm-10">
                        <select type="text"  class="form-control" placeholder="Tingkat" name="id_jenis_pertemuan">

                          @foreach($jenis_pertemuans as $jenis_pertemuan)
                            <option value="{{ $jenis_pertemuan->id }}"> {{ $jenis_pertemuan->nama_pertemuan }} </option>
                          @endforeach

                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input type="date"  class="form-control" placeholder="Tanggal Pertemuan" name="tanggal_pertemuan">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Tempat Pertemuan" name="tempat">
                      </div>
                    </div>

                    

                     <br>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('pertemuan.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 