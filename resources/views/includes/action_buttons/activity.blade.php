<a href="{{ route('kegiatan.edit', $act->id) }}"><button class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></button></a>
<a href="javascript:void(0);" onclick="if(confirm('Anda yakin ingin menghapus?')) {$(this).find('form').submit()};" >
	<button class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></button>
	<form method="post" action="{{ route('kegiatan.destroy',$act->id) }}">
	{{ csrf_field() }}
	{{ method_field('delete') }}
</form>
</a>