
@extends("layouts.app")
@section("page_content")
<h1>lista fumetti</h1>
<ul>
    @foreach ($comics as $comic)
        <li>
            <a href="{{ route('comics.show', $comic->id) }}">
                {{ $comic->title }}
            </a>
        </li>
    @endforeach
</ul>
<a href="{{route('comics.create')}}" class="btn btn-primary">crea nuovo</a>
@endsection