@extends('../layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title> testing </title>
</head>
<body>
<section class="panel panel-default">
                
               <!--  <div class="row wrapper">
                 <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline v-middle">
                      <option value="0">Bulk action</option>
                      <option value="1">Delete selected</option>
                      <option value="2">Bulk edit</option>
                      <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>                
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-sm btn-default active">
                        <input type="radio" name="options" id="option1"> Day
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Week
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Month
                      </label>
                    </div> 
                  </div> 
                  <div class="col-sm-3">
                      <span class="input-group-btn">
                         <a href="" class="btn btn-sm btn-primary pull-right">Tambah Pertemuan</a>
                      </span>
                    </div>
                  </div>
                </div> -->
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