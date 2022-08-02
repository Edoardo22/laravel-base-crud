
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
      <a href="{{route('comics.index')}}" class="btn btn-primary">indietro</a>
    </div>
  </div>
@endsection