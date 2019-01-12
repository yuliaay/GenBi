@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title> Tambah Artikel </title>
</head>
<body>
  <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  Artikel
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="{{ route('artikel.store') }}" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_post" name="id_post">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="judul" placeholder="Judul Konten">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-10">
                        <select type="text"  class="form-control" placeholder="Tingkat" name="kategori">
                          <option value="Universitas"> Universitas </option>
                          <option value="Nasional"> Nasional </option>
                          <option value="Internasional"> Internasional </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Konten</label>
                      <div class="col-sm-10">
                       <textarea name="konten" rows="5" class="form-control" placeholder="Post Content"></textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">File</label>
                      <div class="col-sm-10">
                        <input type="file"  class="form-control" placeholder="file" name="gambar" accept=".jpg, .jpeg, .png">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </section>
</body>
</html>
            
@endsection 