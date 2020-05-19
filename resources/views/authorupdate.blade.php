@extends('layouts.app')

@section('title-block')Обновление автора@endsection

@section('content')
<div class="container">
  <h3>Обновление автора</h3>
  <form action="{{ route('updateauthorsubmit', $data->id) }}" method="post">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="name">Введите ФИО:</label>
          <input type="text" class="form-control" name="name" placeholder="Введите имя автора" value="{{$data->name}}" id="name"><br>
          <label for="name">Введите дату рождения автора:</label>
          <input type="date" class="form-control" name="date" placeholder="Введите дату рождения автора" value="{{$data->date}}" id="date"><br>
          <button type="submit" class="btn btn-success" name="button">Обновить</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
