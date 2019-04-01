@extends('../layouts.header')

@section('content')
<style type="text/css">
  .col-md-4 {
    padding-top: 4%;
  }
</style>
      <div id="services">
        <div class="container">
          <div class="section-title">
          </div>
          <div class="row">

            @if($articles)
            @foreach($articles as $article)

            <div class="col-md-4">
              <div class="service-media"> <img src="{{ url('img/artikel/' . $article->gambar) }}" width="300px"> </div>
              <div class="service-desc">
                <a href="{{ route('artikel.show', $article->id) }}"><h3>{{ str_limit($article->judul, 50) }}</h3></a>
                <p>{{ str_limit($article->konten, 200) }}</p>
              </div>
            </div>

            @endforeach
            @endif

            {{-- <div style="clear: both"></div>

            {{ $articles->links() }} --}}

          </div>
        </div>
      </div>
@endsection