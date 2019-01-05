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
                  Data Prestasi
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="{{ route('prestasi.update', $prestasi) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="hidden" name="id_user" class="form-control" value="1">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Prestasi</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nama Prestasi" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Tahun" name="tahun" value="{{ $prestasi->tahun }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tingkat</label>
                      <div class="col-sm-10">
                        <select type="text"  class="form-control" placeholder="Tingkat" name="tingkat" value="{{ $prestasi->tingkat }}">
                          <option value="Universitas"> Universitas </option>
                          <option value="Nasional"> Nasional </option>
                          <option value="International"> International </option>
                        </select>
                      </div>
                    </div>

                     <br>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('prestasi.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 