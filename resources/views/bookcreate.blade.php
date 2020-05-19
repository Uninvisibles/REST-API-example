@extends('layouts.app')

@section('title-block')Добавление книги@endsection

@section('content')
<div class="container">
  <h3>Добавление книги</h3><br>
  <form action="/books/create/submit" method="post">
    @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="title">Введите название:</label>
        <input type="text" class="form-control" name="title" placeholder="Введите название" id="title"><br>
        <label for="author">Выберите автора:</label>
        <select type="text" class="form-control" name="author_id" id="author_id">
          @foreach($data as $el)
          <option value="{{ $el->id }}">{{ $el->name }}</option>
          @endforeach
        </select><br>
        <label for="genre">Введите жанр:</label>
        <input type="text" class="form-control" name="genre" placeholder="Введите жанр" id="genre"><br>
        <button type="submit" class="btn btn-success" name="button">Добавить</button>
      </div>
    </div>
  </div>
</form>
</div>
@endsection
