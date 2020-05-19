<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorsRequest;
use App\Http\Requests\BooksRequest;
use App\Models\Authors;
use App\Models\Books;

class CRUDController extends Controller
{
    public function create_book() {
      return view('bookcreate', ['data'=> Authors::all()]);
    }
    public function books() {
      $books = new Books;
      return view('books', ['data' => $books->get()], ['data'=> Authors::all()]);
    }
    public function onebook($id) {
      $books = new books();
      return view('one-book', ['data'=> $books->find($id)]);
    }
    public function updatebook($id) {
      $books = new books();
      return view('bookupdate', ['data'=> $books->find($id)], ['data_author'=> Authors::all()]);
    }
    public function submit_book(BooksRequest $req) {
      $books = new books();
      $books->title = $req->input('title');
      $books->author_id = $req->input('author_id');
      $books->genre = $req->input('genre');
      $books->save();
      return redirect()->route('books');
    }
    public function updatebooksubmit($id, BooksRequest $req) {
      $books = books::find($id);
      $books->title = $req->input('title');
      $books->author_id = $req->input('author_id');
      $books->genre = $req->input('genre');
      $books->save();
      return redirect()->route('onebook', $id);
    }
    function deletebook($id) {
      books::find($id)->delete();
      return redirect()->route('books', $id);
    }

    public function createauthor() {
      return view('authorcreate');
    }
    public function submit_author(AuthorsRequest $req) {
      $authors = new authors();
      $authors->name = $req->input('name');
      $authors->year = $req->input('year');
      $authors->save();
      return redirect()->route('authors');
    }
    public function authors() {
      return view('authors', ['data'=> Authors::all()]);
    }
    public function oneauthor($id) {
      $authors = new authors();
      return view('one-author', ['data'=> $authors->find($id)]);
    }
    public function updateAuthor($id) {
      $authors = new authors();
      return view('authorupdate', ['data'=> $authors->find($id)]);
    }
    public function updateauthorsubmit($id, AuthorsRequest $req) {
      $authors = authors::find($id);
      $authors->name = $req->input('name');
      $authors->year = $req->input('year');
      $authors->save();
      return redirect()->route('oneauthor', $id);
    }
    function deleteAuthor($id) {
      authors::find($id)->delete();
      return redirect()->route('authors', $id);
    }
}
