@extends('master')

@section('content')
	<h1>Search for a Book</h1>

	<hr/>

  {!! Form::open(array('route' => 'search', 'method' => 'get')) !!}

	<div class="form-group">
  {!! Form::text('keyword' , null , ['class' => 'form-control', 'placeholder'=> 'Search']) !!}
</div>
  {!! Form::select('by', array('title' => 'Title of Book', 'author' => 'Author of Book', 'genre' => 'Genre of Book'), null, ['class'=> 'form-control']) !!}

	<div class="form-group">
  {!! Form::submit('Search', ['class' => 'btn btn-primary btn-block']) !!}
</div>

  {!! Form::close() !!}
<div id="result">

</div>

<script>
$(document).ready(function(){
    $("form").submit(function(event){
       event.preventDefault();
			 $.ajax({
			 	url: 'search/get',
			 	type: 'GET',
			 	dataType: 'html',
			 	data: $( "form" ).serialize()
			 })
			 .done(function(data,status,xhr) {
					$('#result').html(data);
			 })
    });
});
</script>

@stop
