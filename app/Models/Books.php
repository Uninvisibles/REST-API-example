<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

  public function authors() {
      return $this->belongsTo('App\Models\Authors');
    }

  public function rules(Request $request) {
      $rules = [
          'title' => 'required|min:1|max:200',
          'author_id' => 'required|integer',
          'genre' => 'required|min:1|max:10'
        ];
      switch ($this->getMethod()) {
        case 'POST':
          return $rules;
        case 'PUT':
          return [
            'id' => 'required|integer|exists:books,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
            'title' => [
              'required',
              Rule::unique('books')->ignore($this->title, 'title') //должен быть уникальным, за исключением себя же
            ]
          ] + $rules; // и берем все остальные правила
        // case 'PATCH':
        case 'DELETE':
          return [
              'id' => 'required|integer|exists:books,id'
          ];
        }
    }
}
