@extends('master')

@section('content')
	<h1>{{ $book->title }}</h1>
	Writer: <strong>{{ $book->author->name }}</strong>
	<h4>
		Price: {{ $book->price }} &#36;
	</h4>

	@unless ($book->genres->isEmpty())
		<h5>Genre:</h5>
		<ul>
			@foreach ($book->genres as $genre)
				<li>{{$genre->name}}</li>
			@endforeach
		</ul>
	@endif

	Release date: {{$book->release_date}}
	@include('share', ['url' => Request::url()])

@stop
