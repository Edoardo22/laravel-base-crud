
@extends("layouts.app")
@section("page_content")
<h1>crea fumetto</h1>
<form action="{{route('comics.store')}}" method="post">
    @csrf

    <div class="mb-3">
      <label for="titleInput" class="form-label">title</label>
      <input type="text" class="form-control" name="title" id="titleInput">
    </div>

    <div class="mb-3">
      <label for="textInput" class="form-label">description</label>
      <textarea class="form-control" name="text" id="textInput" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="textInput" class="form-label">thumb</label>
        <textarea class="form-control" name="text" id="textInput" rows="1"></textarea>
      </div>

      <div class="mb-3">
        <label for="textInput" class="form-label">price</label>
        <textarea class="form-control" name="textInput" id="textInput" rows="1"></textarea>
      </div>

      <div class="mb-3">
        <label for="textInput" class="form-label">series</label>
        <textarea class="form-control" name="text" id="textInput" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="textInput" class="form-label">sale_date</label>
        <textarea class="form-control" name="text" id="textInput" rows="3"></textarea>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>comic book</option>
          <option value="1">graphic novel</option>
        </select>
        <label for="floatingSelect">comic type</label>
      </div> 

    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Salva</button>
      <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    </div>
  </form>
@endsection