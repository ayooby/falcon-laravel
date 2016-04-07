<table class="table table-bordered table-hover" id="books">
  <caption>Books.</caption>
  <thead>
    <tr>
      <th data-toggle="tooltip" title="Sort By ID" class="header">ID</th>
      <th data-toggle="tooltip" title="Sort By Title" class="header">Title</th>
      <th data-toggle="tooltip" title="Sort By Author" class="header">Author</th>
      <th data-toggle="tooltip" title="Sort By Release Date" class="header">Release Date</th>
      <th data-toggle="tooltip" title="Sort By Genres" class="header">Genres</th>
      <th data-toggle="tooltip" title="Sort By Price" class="header">Price &#36;</th>
    </tr>
  </thead>
  <tbody>
    @if(count($books) > 0)
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
  @endif

  </tbody>
</table>

<script type="text/javascript">
$(document).ready(function()
	{
			$("#books").tablesorter();
	}
);
</script>
