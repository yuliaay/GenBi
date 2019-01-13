@extends('../layouts.layout')

@section('content')
<section class="panel panel-default">

  <div class="row wrapper">

    <div class="col-md-12">
      <span class="input-group-btn">
       <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Kegiatan</a>
     </span>
   </div>

 </div>

<div class="table">
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

</section>
@endsection 

@section('scripts')

<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
  $(function() {
    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('get_kegiatan_datatable') }}',
      columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'tanggal'},
        {data: 'peserta'},
        {data: 'tempat'},
        {data: 'nama_kegiatan'},
        {data: 'bentuk_kegiatan'},
        {data: 'jenis_kegiatan'},
        {data: 'aksi', orderable: false, searchable: false}
      ]
    });
  });
</script>

@endsection