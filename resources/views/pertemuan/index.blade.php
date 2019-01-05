@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title> testing </title>
</head>
<body>
<section class="panel panel-default">
                
              <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                                 
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    
                  </div>
                  <div class="col-sm-3">
                      <span class="input-group-btn">
                         <a href="{{ route('pertemuan.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Pertemuan</a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="tablse-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="20">No</th>
                        <th class="th-sortable" data-toggle="class">Tanggal
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Nama Pertemuan</th>
                        <th>Jenis </th>
                        <th>Tempat </th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pertemuans as $pertemuan)
                      <tr>
                        
                        <td>1</td>
                        <td>{{ $pertemuan->tanggal_pertemuan }}</td>
                        <td>{{ $pertemuan->pertemuan }}</td>
                        <td>{{ $pertemuan->jenis_pertemuan->nama_pertemuan }}</td>
                        <td>{{ $pertemuan->tempat }}</td>
                        <td><a href="" class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></a>
                        <form class="" action="" method="post">
                          <button class="btn btn-sm btn-danger" type="SUBMIT"> <i class="fa fa-trash-o"></i></button>
                        </form>
                        </td>
                        
                      </tr>
                      @endforeach                      
                      
                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      
                                       
                    </div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
</body>
</html>
@endsection 