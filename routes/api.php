<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Use App\Models\Books;
Use App\Models\Authors;

// Route::get('books', function() {
//     return Books::all();
// });
//
// Route::get('books/{id}', function($id) {
//     return Books::find($id);
// });
//
// Route::post('books', function(Request $request) {
//     return Books::create($request->all);
// });
//
// Route::put('books/{id}', function(Request $request, $id) {
//     $books = Books::findOrFail($id);
//     $books->update($request->all());
//
//     return $books;
// });
//
// Route::delete('books/{id}', function($id) {
//     Books::find($id)->delete();
//
//     return 204;
// });
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('books/list', 'ApiController@booklist');
Route::get('books/{id}', 'ApiController@show');
Route::post('books/update/{id}', 'ApiController@update');
Route::delete('books/delete/{id}', 'ApiController@delete');
