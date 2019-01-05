@extends("layout.halaman_admin")

@section("konten")
<div class="col-xs-12">
    <div class="sec-box">
        <a class="closethis">Tutup</a>
        <header>
            <h2 class="heading">Daftar Barang</h2>
        </header>
        <div class="contents">
            <a class="togglethis">Toggle</a>
            <div class="table-box">
                <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
                <table class="display table" id="example">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Sisa Stok</th>
                            <th>Harga Jual</th>
                            <th style="width:30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{ csrf_field() }}
                        @foreach($stok as $data)
                        <tr>
                            <td>{{$data->nama_barang}}</td>
                            <td>{{$data->stok_barang}}</td>
                            <td>{{$data->harga_barang}}</td>
                            <td>
                                <button>Tombol</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script>
                    var asInitVals = new Array();           
                    $(document).ready(function() {
                        var oTable = $('#example').dataTable( {
                            "oLanguage": {
                                "sSearch": "Pencarian barang:"
                            }
                        } );
                    } );

                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<!-- ========================== Batas Konten ============================= -->
</script>
@endsection