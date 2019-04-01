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
                </div> 
                <div class="table-responsive">
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

                     @foreach($pertemuans as $pertemuan)

                    <?php
        				    	$sekarang  = new DateTime();
        				    	$jampertemuan = new DateTime($pertemuan->created_at);

        				    	$cekbeda   = $sekarang->diff($jampertemuan);
        				    	$beda      = $cekbeda->format('%H');
            				?>

    					@if($beda < 2 && $jampertemuan < $sekarang)
                      
	                      <tr>
	                        
	                        <td>1</td>
	                        <td>{{ $pertemuan->tanggal_pertemuan }}</td>
	                        <td>{{ $pertemuan->pertemuan }}</td>
	                        <td>{{ $pertemuan->jenis_pertemuan->nama_pertemuan }}</td>
	                        <td>{{ $pertemuan->tempat }}</td>
	                        <td>


                          <?php
                            $absen = false;
                            foreach($absensis as $absensi){
                              if($absensi->id_pertemuan == $pertemuan->id) $absen = true;
                            }
                          ?>

                          @if($absen)
                              <button class="btn btn-sm btn-default" disabled>Sudah Absen</button>
                          @else

  	                        <form class="" action="{{ route('absensi.store', $pertemuan) }}" method="post">
  	                        	{{ csrf_field() }} 

  	                          <button class="btn btn-sm btn-primary" type="SUBMIT">Absen</button>
  	                        </form>

                          @endif


	                        </td>                        
	                      </tr>

	                    @endif
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