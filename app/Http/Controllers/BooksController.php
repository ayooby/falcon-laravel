<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckBookRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Author;
use App\Book;
use App\Genre;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::latest('release_date')->available()->paginate(20);

      return view('books.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::lists('name' , 'id');
        $authors = Author::lists('name' , 'id');

        return view('books.create', compact('book' , 'genres', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckBookRequest $request)
    {
        $author = Author::find($request->author);
        $book = new Book($request->all());
        $book->author()->associate($author);
        $book->save();

        $this->syncGenres($book, $request->input('genre_list'));

        \Session::flash('alert', true);

        return redirect('books');
    }

    /**
     * Display the specified resource using route model bindings and method injection.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
      return view('books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
      $genres = Genre::lists('name' , 'id');
      $authors = Author::lists('name' , 'id');


      return view('books.edit', compact('book' , 'genres', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CheckBookRequest $request, Book $book)
    {
        $author = Author::find($request->author);
        $book->update($request->all());
        $book->author()->associate($author);

        $this->syncGenres($book, $request->input('genre_list'));

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Sync up the list of Genres
     *
     * @param  Book $Book
     * @param  array   $genres
     */
    private function syncGenres(Book $Book, array $genres)
    {
      $Book->genres()->sync($genres);
    }


/**
 * search page index
 */
    public function searchPage()
    {
      return view('books.search');
    }

    public function search(Request $request)
    {
        switch ($request->by) {
          case 'author':
              $authors = Author::where('name', 'like', '%'. $request->keyword .'%')->get();
              foreach ($authors as $author) {
                $books[] = $author->books;
              }
              $books = (isset($books)) ? array_collapse($books) : null ;
            break;

          case 'title':
                $books = Book::where('title', 'like', '%'. $request->keyword .'%')->get();
            break;

          case 'genre':
                $genres = Genre::with('books')->where('name', 'like', '%'. $request->keyword .'%')->get();
                foreach ($genres as $genre) {
                  $books[] = $genre->books;
                }
                $books = (isset($books)) ? array_collapse($books) : null ;
            break;

          default:
              $books = Book::where('title', 'like', '%'. $request->keyword .'%')->get();
            break;
        }
        return view('books.search_result', compact('books'));
    }

    /**
     * Get all books and Return in PDF format
     */
    public function getAllPDF()
    {
      $books = Book::available()->get();
      $view = view('books.pdf', compact('books'));
      $pdf = \App::make('phantom-pdf');
      return $pdf->createFromView($view, 'AllBooksList.pdf');

    }

}
