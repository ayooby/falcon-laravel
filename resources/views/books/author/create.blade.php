@extends('master')

@section('content')
	<h1>New Genre</h1>

	<hr/>

	{!! Form::open(['url' => 'authors', 'method' => 'POST']) !!}

  <div class="form-group">
  	{!! Form::label('name', 'Name:') !!}
  	{!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
  	{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
  </div>
	{!! Form::close() !!}

	@include('errors.list')

@stop
