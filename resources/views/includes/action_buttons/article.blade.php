<a href="{{ route('artikel.show', $art->id) }}"><button class="btn btn-sm btn-success"> <i class="fa fa-eye"></i></button></a>
<a href="{{ route('artikel.edit', $art->id) }}"><button class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i></button></a>
<a href="javascript:void(0);" onclick="if(confirm('Anda yakin ingin menghapus?')) {$(this).find('form').submit()};" >
	<button class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></button>
	<form method="post" action="{{ route('artikel.destroy',$art->id) }}">
	{{ csrf_field() }}
	{{ method_field('delete') }}
	</form>
</a>