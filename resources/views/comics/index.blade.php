
@extends("layouts.app")
@section("page_content")
<h1>lista fumetti</h1>
<ul>
    @foreach ($comics as $comic)
        <li class="mb-3">
            <a href="{{ route('comics.show', $comic->id) }}">
                {{ $comic->title }}
            </a>
            <div class="container d-flex">
            <a href="{{route('comics.edit',  $comic->id)}}" class="btn btn-primary">modifica</a>
            <form action="{{route('comics.destroy',  $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
        </li>
    @endforeach
</ul>
<a href="{{route('comics.create')}}" class="btn btn-primary">crea nuovo</a>
@endsection