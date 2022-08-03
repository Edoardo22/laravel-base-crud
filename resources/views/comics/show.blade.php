
@extends("layouts.app")
@section("page_content")
<h1>fumetto singolo</h1>
<div class="card" style="width: 25rem;">
    <img src="{{$comic["thumb"]}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$comic["title"]}}</h3>
      <h4 class="card-title">{{$comic["price"]}}$</h4>
      <h4 class="card-title">{{$comic["series"]}}</h4>
      <h4 class="card-title">{{$comic["sale_date"]}}</h4>
      <h4 class="card-title">{{$comic["type"]}}</h4>
      <p class="card-text">{{$comic["description"]}}</p>
      <div class="container d-flex  flex-column">
        <a href="{{route('comics.edit',  $comic->id)}}" class="btn btn-primary">modifica</a>
        <a href="{{route('comics.index')}}" class="btn btn-warning">indietro</a>
        <form action="{{route('comics.destroy',  $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger w-100">Elimina</button>
    </form>
</div>
    </div>
  </div>
@endsection