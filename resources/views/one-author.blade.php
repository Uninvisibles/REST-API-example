@extends('layouts.app')

@section('title-block'){{ $data->name }}@endsection

@section('content')
<div class="container">
  <label for="name">ФИО автора:</label><br>
  <h3>{{ $data->name }}</h3>
  <label for="date">Дата рождения автора:</label><br>
  <p>{{ $data->date }}</p>
  <label for="count">Количество книг автора:</label><br>
  {{-- здесь должно быть $data->books->count() но это не работает --}}
  <p>{{ $data }}</p>
</div>

@endsection
