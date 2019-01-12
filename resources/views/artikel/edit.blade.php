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
                  <form class="form-horizontal" method="post" action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data">

                    @method('patch')
                    {{ csrf_field() }}

                    <div class="form-group">
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_post" name="id_post">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="judul" placeholder="Judul Konten" value="{{ $artikel->judul }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-10">
                        <select type="text"  class="form-control" placeholder="Tingkat" name="kategori">
                          <option {{ $artikel->kategori === "Universitas" ? "selected" : "" }} value="Universitas"> Universitas </option>
                          <option {{ $artikel->kategori === "Nasional" ? "selected" : "" }} value="Nasional"> Nasional </option>
                          <option {{ $artikel->kategori === "Internasional" ? "selected" : "" }} value="Internasional"> International </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Konten</label>
                      <div class="col-sm-10">
                       <textarea name="konten" rows="5" class="form-control" placeholder="Post Content">{{ $artikel->konten }}</textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">File</label>
                      <div class="col-sm-10">
                        <input type="file"  class="form-control" placeholder="file" name="gambar">
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