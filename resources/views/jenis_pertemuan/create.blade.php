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
                  <form class="form-horizontal" method="post" action="{{ route('jenispertemuan.store') }}">
                    {{ csrf_field() }}

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Pertemuan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="nama_pertemuan" placeholder="Nama Pertemuan">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label">Deskripsi Pertemuan</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Deskripsi Pertemuan" name="deskripsi_pertemuan">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <a href="{{ route('jenispertemuan.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 