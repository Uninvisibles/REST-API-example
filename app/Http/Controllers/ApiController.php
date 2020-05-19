<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\BooksRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function booklist()
    {
        return Books::all();
    }

    public function show(Books $books, $id)
    {
        //return $books;
        return Books::find($id);
    }

    // public function store(BooksRequest $request)
    // {
    //     $books = Books::create($request->all());
    //
    //     return response()->json($books);
    // }

    function update(BooksRequest $request, $id)
        {
            $books=Books::find($id);
            $books->title=$request->title;
            $books->author_id=$request->author_id;
            $books->genre=$request->genre;
            $books->save();

            return response()->json($books, 201);
        }

    // public function update(BooksRequest $request, Books $books)
    // {
    //     $books->update($request->all());
    //
    //     return response()->json($books, 200);
    // }

    // public function update(BooksRequest $request, $id)
    //  {
    //      $books = Books::findOrFail($id);
    //      $books->fill($request->except(['id']));
    //      // $books->title=$request->input('title');
    //      // $books->author_id=$request->input('author_id');
    //      // $books->genre=$request->input('genre');
    //
    //      $books->update($request->all()->except(['id']));
    //      $books->save();
    //      return response()->json($books, 201);
    //  }

    // public function delete(Books $books)
    // {
    //     $books->delete();
    //
    //     return response()->json(null, 204);
    // }

     function delete($id)
    {
        Books::find($id)->delete();
        return response(null, 204);
    }
}
