@extends('../layouts.layout')

@section('content')
	<section class="panel panel-default">

    <div class="row wrapper">
      <div class="col-sm-5 m-b-xs">
       
      </div>
      <div class="col-sm-4 m-b-xs">
        
      </div>
      <div class="col-sm-3">
        <span class="input-group-btn">
         <!--<a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Prestasi</a>-->
         <a href="{{ route('download_prestasi.export') }}" class="btn btn-sm btn-primary pull-right">Download Prestasi</a>
       </span>
     </div>
   </div>

<div class="table">
  <table class="table" id="prestasis-table">
    <thead>
      <tr>
        <th width="20">No</th>
        <th>Nama</th>
        <th class="th-sortable" data-toggle="class">Nama Prestasi
          <span class="th-sort">
            <i class="fa fa-sort-down text"></i>
            <i class="fa fa-sort-up text-active"></i>
            <i class="fa fa-sort"></i>
          </span>
        </th>
        <th>Tahun</th>
        <th>Tingkat</th>
        <th>Aksi</th>
      </tr>
    </thead>
 </table>
</div>

</section>
@endsection 

@section('scripts')
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
  $(function() {
    $('#prestasis-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('get_prestasi_datatable') }}',
      columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama'},
        {data: 'nama_prestasi'},
        {data: 'tahun'},
        {data: 'tingkat'},
        {data: 'aksi', orderable: false, searchable: false}
      ]
    });
  });
</script>
@endsection