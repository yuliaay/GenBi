@extends('../layouts.layout')

@section('content')
<section class="panel panel-default">

  <div class="row wrapper">

    <div class="col-md-12">
      <span class="input-group-btn">
       <a href="" class="btn btn-sm btn-primary pull-right">Download Rekap Absensi</a>
     </span>
   </div>

 </div>

<div class="table">
  <table class="table" id="rekap_absensi">
    <thead>
      <tr>
        <th width="20">No</th>
        <th class="th-sortable" data-toggle="class">Nama Peserta
          <span class="th-sort">
            <i class="fa fa-sort-down text"></i>
            <i class="fa fa-sort-up text-active"></i>
            <i class="fa fa-sort"></i>
          </span>
        </th>
        <th>Pertemuan</th>
        <th>Status Konfirmasi</th>
        <th>Konfirmasi</th>
        
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
    $('#rekap_absensi').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('getJoinsData_absensi') }}',
      columns: [
        {data: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'name'},
        {data: 'pertemuan'},
        {data: 'konfirmasi'},
       
      ]
    });
  });
</script>

@endsection