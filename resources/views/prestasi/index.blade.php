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
         <a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Prestasi</a>
       </span>
     </div>
   </div>
 </div>
 <div class="table-responsive">
  <table class="table table-striped b-t b-light">
    <thead>
      <tr>
        <th width="20">No</th>
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
    <tbody>

      @if($prestasis)

      @foreach($prestasis as $prestasi)

      <tr>
        <td>1</td>
        <td>{{ $prestasi->nama_prestasi }}</td>
        <td>Tahun</td>
        <td>Universitas</td>
        <td><a href="{{ route('prestasi.edit', $prestasi) }}" class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></a>
          <form class="" action="{{ route('prestasi.destroy',$prestasi) }}" method="post">
           {{ csrf_field() }}
           {{ method_field('DELETE')}} 
           
           <button class="btn btn-sm btn-danger" type="SUBMIT"> <i class="fa fa-trash-o"></i></button>
         </form>
       </td>
     </tr>

     @endforeach

     @else

     <p>Tidak ada data</p>
     
     @endif

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