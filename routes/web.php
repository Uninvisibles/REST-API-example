<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/authors/create', function () {
    return view('authorcreate');
});
Route::post('/authors/create/submit', 'CRUDController@submit_author');

Route::get('/authors', 'CRUDController@authors')->name('authors');

Route::get('/authors/{id}', 'CRUDController@oneauthor')->name('oneauthor');

Route::get('/authors/{id}/update', 'CRUDController@updateAuthor')->name('updateauthor');

Route::post('/authors/{id}/update', 'CRUDController@updateAuthorSubmit')->name('updateauthorsubmit');

Route::get('/authors/{id}/delete', 'CRUDController@deleteAuthor')->name('deleteauthor');

Route::get('/authors/create', 'CRUDController@createauthor');


Route::get('/books', function () {
    return view('books');
});
Route::post('/books/create/submit', 'CRUDController@submit_book');

Route::get('/books', 'CRUDController@books')->name('books');

Route::get('/books/create', 'CRUDController@create_book');

Route::get('/books/{id}/', 'CRUDController@onebook')->name('onebook');

Route::get('/books/{id}/update', 'CRUDController@updatebook')->name('updatebook');

Route::post('/books/{id}/update', 'CRUDController@updatebooksubmit')->name('updatebooksubmit');

Route::get('/books/{id}/delete', 'CRUDController@deletebook')->name('deletebook');
