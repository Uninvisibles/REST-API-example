@extends('layouts.app')

@section('title-block'){{ $data->title }}@endsection

@section('content')
<div class="container">
  <label for="title">Название:</label><br>
  <h3>{{ $data->title }}</h3>
  <label for="author_id">Имя автора:</label><br>
  <p>{{ $data->author_id }}</p>
  <label for="genre">Жанр:</label><br>
  <p>{{ $data->genre }}</p>
</div>

@endsection
