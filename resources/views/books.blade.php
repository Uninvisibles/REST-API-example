@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
<div class="container">
  <h3>Книги</h3>
  <a href="/books/create" class="btn btn-success">Создать</a>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table">
        <thead>
          <tr><br>
            <td>ID книги</td>
            <td>Название</td>
            <td>Автор</td>
            <td>Жанр</td>
            <td>Действия</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($data as $el)
              <tr>
                <td>{{ $el->id }}</td>
                <td>{{ $el->title }}</td>
                {{-- здесь должно быть $el->authors->name но это не работает --}}
                <td>{{ $el->author_id }}</td>
                <td>{{ $el->genre }}</td>
                <td>
                  <a href="{{ route('onebook', $el->id) }}">Show</a>
                  <a href="{{ route('updatebook', $el->id) }}">Edit</a>
                  <a href="{{ route('deletebook', $el->id) }}">Delete</a>
                </td>
              </tr>
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
