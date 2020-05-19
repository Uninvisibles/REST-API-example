@extends('layouts.app')

@section('title-block')Добавление книги@endsection

@section('content')
<div class="container">
  <h3>Добавление книги</h3><br>
  <form action="{{ route('updatebooksubmit', $data->id) }}" method="post">
    @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="title">Введите название:</label>
        <input type="text" class="form-control" name="title" placeholder="Введите название" value="{{$data->title}}" id="title"><br>
        <label for="author">Выберите автора:</label>
        <select type="text" class="form-control" name="author_id" value="{{$data->author_id}}" id="author_id">
          @foreach($data_author as $el)
          <option value="{{ $el->id }}">{{ $el->name }}</option>
          @endforeach
        </select><br>
        <label for="genre">Введите жанр:</label>
        <input type="text" class="form-control" name="genre" placeholder="Введите жанр" value="{{$data->genre}}" id="genre"><br>
        <button type="submit" class="btn btn-success" name="button">Редактировать</button>
      </div>
    </div>
  </div>
</form>
</div>
@endsection
