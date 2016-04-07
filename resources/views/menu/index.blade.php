@extends('master')

@section('content')

  {!! Form::open($book = new App\Book ,['url' => 'books']) !!}

  {!! Form::close() !!}


@stop
