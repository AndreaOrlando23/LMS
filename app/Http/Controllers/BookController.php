<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{   

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $books = Book::all();
        // $books = Book::orderBy('name', 'desc')->get();
        // $books = Book::where('id', 1)->get();
        // $books = Book::latest()->get();
        
        return view('books.index', ['books' => $books]);
    }

    public function show($id) {
        $book = Book::findOrFail($id);
        return view('books.show', ['book'=> $book]);
    }

    public function create() {
        return view('books.create');
    }

    public function store() {
        $book = new Book();
        $book->title = request('title');
        $book->author = request('author');
        $book->category = request('category');
        $book->edition = request('edition');
        $book->location = request('location');
        $book->save();
        return redirect('/books/create')->with('mssg', 'Book registered');
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books');
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->title = $request['title'];
        $book->author = $request['author'];
        $book->category = $request['category'];
        $book->edition = $request['edition'];
        $book->location = $request['location'];
        $book->save();
        return redirect('/books');
    }

}
