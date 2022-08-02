
@extends("layouts.app")
@section("page_content")
<h1>crea fumetto</h1>
<form action="{{route('comics.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="titleComic" class="form-label">Titolo Fumetto</label>
        <input type="title" name="title" class="form-control" id="titleComic" placeholder="Titolo Fumetto">
    </div>
    <div class="mb-3">
        <label for="descriptionComic" class="form-label">Descrizione Fumetto</label>
        <textarea class="form-control" name="description" id="descriptionComic" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="imageSrc" class="form-label">Percorso Immagine</label>
        <input type="title" name="thumb" class="form-control" id="imageSrc" placeholder="Percorso Immagine">
    </div>
    <div class="mb-3">
        <label for="priceComic" class="form-label">Prezzo Fumetto</label>
        <input type="title" name="price" class="form-control" id="priceComic" placeholder="Prezzo Fumetto">
    </div>
    <div class="mb-3">
        <label for="seriesComic" class="form-label">Serie Fumetto</label>
        <input type="title" name="series" class="form-control" id="seriesComic" placeholder="Serie Fumetto">
    </div>
    <div class="mb-3">
        <label for="dateComic" class="form-label">Data uscita Fumetto</label>
        <input type="title" name="sale_date" class="form-control" id="dateComic" placeholder="Data uscita Fumetto">
    </div>
    <div class="mb-3">
        <label for="typeComic" class="form-label">Tipo Fumetto</label>
        <input type="title" name="type" class="form-control" id="typeComic" placeholder="Tipo Fumetto">
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-success">Aggiungi</button>
        <a href="{{ route("comics.index")}}" class="btn btn-secondary">Annulla</a>
    </div>
  </form>
@endsection