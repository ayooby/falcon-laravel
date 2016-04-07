<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('price', 'Price:') !!}
	{!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('release_date', 'Release Date:') !!}
	{!! Form::date('release_date', $date, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('genre_list', 'Genres:') !!}
	{!! Form::select('genre_list[]', $genres, null, ['id' => 'genre_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
	{!! Form::label('author', 'Author:') !!}
	{!! Form::select('author', $authors, $author_id, ['id' => 'author', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('available', 'Status:') !!}
	{!! Form::select('available', ['1' => 'Available', '0' => 'Not available'], $book->available) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')

@stop
