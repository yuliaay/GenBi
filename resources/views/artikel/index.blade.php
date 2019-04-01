@extends('../layouts.layout')

@section('content')

<section class="panel panel-default">

  <div class="row wrapper">
    <div class="col-md-12">
      <span class="input-group-btn">
       <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary pull-right" type="button">Tambah Artikel</a>
     </span>
   </div>
 </div>

  <table id="articles-table" class="table table-striped b-t b-light">
    <thead>
      <tr>
        <th>No</th>
        <th class="th-sortable" data-toggle="class">Judul Artikel
          <span class="th-sort">
            <i class="fa fa-sort-down text"></i>
            <i class="fa fa-sort-up text-active"></i>
            <i class="fa fa-sort"></i>
          </span>
        </th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
</table>


</section>
@endsection 

@section('scripts')

<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
  $(function() {
    $('#articles-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('get_artikel_datatable') }}',
      columns: [
      {data: 'DT_RowIndex', orderable: false, searchable: false},
      {data: 'judul'},
      {data: 'kategori'},
      {data: 'aksi', orderable: false, searchable: false}
      ]
    });
  });
</script>

@endsection