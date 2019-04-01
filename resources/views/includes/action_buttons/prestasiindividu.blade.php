<a href="{{ route('prestasi.edit', $preid->id) }}"><button class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></button></a>
<a href="javascript:void(0);" onclick="if(confirm('Anda yakin ingin menghapus?')) {$(this).find('form').submit()};" >
    <button class="btn btn-sm btn-danger" type="SUBMIT"> <i class="fa fa-trash-o"></i></button>
    <form class="" action="{{ route('prestasi.destroy', $preid->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}    
    </form>
</a>

