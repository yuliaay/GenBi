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
                  <div class="col-md-12">
                      <span class="input-group-btn">
                         <a href="{{ route('jenispertemuan.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Jenis Pertemuan</a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="table">
                  <table class="table" id="jp-table">
                    <thead>
                      <tr>
                        <th width="20">No</th>
                        <th>Nama Pertemuan</th>
                        <th>Deskripsi Pertemuan</th>
                        <th>Aksi</th>
                      </tr>

                    </thead>
<!--                    <tbody>

                      @foreach($jenis_pertemuan as $pertemuan)

                      <tr>
                        <td>1</td>
                        <td>{{ $pertemuan->nama_pertemuan }}</td>
                        <td></td>
                        <td><a href="" class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></a>
                        <form class="" action="" method="post">
                           
                          <button class="btn btn-sm btn-danger" type="SUBMIT"> <i class="fa fa-trash-o"></i></button>
                        </form>
                        </td>
                      </tr>

                      @endforeach
                                          
                    </tbody>-->
                  </table>
                </div>
<!--                <footer class="panel-footer">
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
              </section> -->
</body>
</html>
@endsection 

@section('scripts')
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
  $(function() {
    $('#jp-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('get_jenispertemuan_datatable') }}',
      columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama_pertemuan'},
        {data: 'deskripsi_pertemuan'},
        {data: 'aksi', orderable: false, searchable: false}
      ]
    });
  });
</script>
@endsection