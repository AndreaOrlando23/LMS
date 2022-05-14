<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
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


}
