@extends('../layouts.header')

@section('content')

<style type="text/css">
	.artikelnya {
		background: white;
		width: 70%;
		position: relative;
		left:15%;
		height: 70%;
		box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.05);
		display: block;
		overflow: scroll;
		overflow-x: hidden;

	}

	.art {
		padding: 2%;
		width: 95%;
		position: relative;
		left:2.5%;
	}

	.background {
		height: 100%;
	}
	.judul {
		padding-top:1%;
		text-align: center;
		padding-bottom: 5%;
	}
	.kategori {
		padding-bottom: 4%;
	}
	.service-media {
		position: relative;
		left:27%;
		padding-bottom: 1%;
	}

	.konten {
		padding-bottom: 5%;
		text-align: justify;
		padding-bottom: 5%;
	}


</style>

<div class="background">
	<div class="artikelnya">
		<div class="art">
			<h1 class="judul">{{ $artikel->judul }}</h1> 
			<!--<h5 class="kategori">{{ $artikel->kategori }}</h5>-->
			<div class="service-media"> <img src="{{ url('img/artikel/' . $artikel->gambar) }}" alt=" " width="400px"> </div>
			<div class="konten"></div>{{ $artikel->konten }} <br>
		</div>
	</div>
</div>


            
@endsection 