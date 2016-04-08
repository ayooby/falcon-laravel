<?php


Route::get('books/search/get/', ['as'=> 'search','uses' => 'BooksController@search']);
Route::get('books/search', ['as'=> 'searchPage','uses' => 'BooksController@searchPage']);
Route::get('books/get/pdf', 'BooksController@getAllPDF');

Route::resource('books', 'BooksController');

Route::resource('genres', 'GenresController');

Route::resource('authors', 'AuthorsController');
