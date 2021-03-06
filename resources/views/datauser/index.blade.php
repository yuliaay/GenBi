@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title> Data User </title>
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
                         <a href="{{ route('register') }}" class="btn btn-sm btn-primary pull-right">Tambah User</a>
                         <a href="{{ route('download_user.export') }}" class="btn btn-sm btn-success pull-right">Download User</a>
                      </span>
                    </div>
                  </div>
                </div>


                  <table class="table" id="u-table">
                    <thead>
                      <tr>
                        <th width="20">No</th>
                        <th class="th-sortable" data-toggle="class">Nama
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Email</th>
                        <th>Hak Akses</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    
                  </table>

               <!-- <footer class="panel-footer">
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
                </footer>-->
              </section>
</body>
</html>
@endsection 

@section('scripts')
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
  $(function() {
    $('#u-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('get_datauser_datatable') }}',
      columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'name'},
        {data: 'email'},
        {data: 'hak_akses'},
        {data: 'aksi', orderable: false, searchable: false}
      ]
    });
  });
</script>
@endsection