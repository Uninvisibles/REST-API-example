@extends('layouts.app')

@section('title-block')Авторы@endsection

@section('content')
<div class="container">
  <h3>Авторы</h3>
  <a href="/authors/create" class="btn btn-success">Добавить</a>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table">
        <thead>
          <tr><br>
            <td>ID автора</td>
            <td>Имя</td>
            <td>Год рождения</td>
            <td>Количество книг</td>
            <td>Действия</td>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $el)
            <tr>
              <td>{{ $el->id }}</td>
              <td>{{ $el->name }}</td>
              <td>{{ $el->year }}</td>
              <td>23</td>
              <td>
                <a href="{{ route('oneauthor', $el->id) }}">Show</a>
                <a href="{{ route('updateauthor', $el->id) }}">Edit</a>
                <a href="{{ route('deleteauthor', $el->id) }}">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
