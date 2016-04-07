@extends('master')

@section('content')
	<h1>Create a Book</h1>

	<hr/>

	{!! Form::model($book = new App\Book ,['url' => 'books']) !!}
		{{-- send name button to form  --}}
		@include('books.form', ['submitButtonText' => 'Create Book', 'author_id' => null, 'date' => \Carbon\Carbon::now()])

	{!! Form::close() !!}

	@include('errors.list')

@stop
