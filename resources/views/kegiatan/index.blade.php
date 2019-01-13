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
                  
                  <div class="col-sm-4 m-b-xs">
                   
                  </div>
                  <div class="col-sm-3">
                      <span class="input-group-btn">
                         <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Kegiatan</a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table" id="users-table">
                  <table class="table" id="users-table">
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
                        <th>Peserta</th>
                        <th>Tempat</th>
                        <th>Nama</th>
                        <th>Bentuk</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                  
                  </table>
                </div>
             <!--   <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      
                                       
                    </div> -->
                   <!-- <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div> -->
                   <!-- <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div> -->
                  </div>
                </footer>
              </section>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://localhost:8000/kegiatan/get_datatable',
            columns: [
            {data: 'tanggal'},
            {data: 'peserta'},
            {data: 'tempat'},
            {data: 'nama_kegiatan'},
            {data: 'bentuk_kegiatan'},
            {data: 'jenis_kegiatan'}
        ]
        });
    });
</script>




</body>
</html>
@endsection 