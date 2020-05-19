@extends('layouts.app')

@section('title-block')Добавление автора@endsection

@section('content')
<div class="container">
  <h3>Добавление автора</h3>
  <form action="/authors/create/submit" method="post">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="name">Введите ФИО:</label>
          <input type="text" class="form-control" name="name" placeholder="Введите имя автора" id="name"><br>
          <label for="name">Введите дату рождения автора:</label>
          <input type="year" class="form-control" name="year" placeholder="Введите дату рождения автора" id="year"><br>
          <button type="submit" class="btn btn-success" name="button">Добавить</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
