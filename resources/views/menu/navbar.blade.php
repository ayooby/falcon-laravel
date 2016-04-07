<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('books') }}">Book Store</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('books/get/pdf') }}">PDF List</a></li>
        <li><a href="{{ url('books/search') }}">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {{-- <li>{!! link_to_action('BooksController@show', $latest->title, [$latest->id]) !!}</li> --}}
        <li>{!! link_to_action('BooksController@create', 'Create Book') !!}</li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
