<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>


	<table class="table table-bordered table-hover" id="books">
		<caption>All Available List Books.</caption>
		<thead>
			<tr>
				<th data-toggle="tooltip" title="Sort By ID" class="header">#</th>
				<th data-toggle="tooltip" title="Sort By Title" class="header">Title</th>
				<th data-toggle="tooltip" title="Sort By Author" class="header">Author</th>
				<th data-toggle="tooltip" title="Sort By Release Date" class="header">Release Date</th>
				<th data-toggle="tooltip" title="Sort By Genres" class="header">Genres</th>
				<th data-toggle="tooltip" title="Sort By Price" class="header">Price &#36;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($books as $book)
				<tr>
					<th scope="row">{{ $book->id }}</th>
					<td><a href="{{ url('/books', $book->id) }}">{{ $book->title }}</a></td>
					<td>{{ $book->author->name }}</td>
					<td>{{ $book->release_date }}</td>
					<td>
						@unless ($book->genres->isEmpty())
							<ul>
								@foreach ($book->genres as $genre)
									<li>{{$genre->name}}</li>
								@endforeach
							</ul>
						@endif
					</td>
					<td>{{ $book->price }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
