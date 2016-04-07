@extends('master')

@section('content')
	<h1>Edit: {{ $book->title }}</h1>

	{!! Form::model($book , ['method' => 'PATCH', 'action' => ['BooksController@update' , $book->id]]) !!}
		@include('books.form', ['submitButtonText' => 'Update Book', 'author_id' => $book->author->id, 'date' => $book->release_date])
	{!! Form::close() !!}

	@include('errors.list')
@stop
