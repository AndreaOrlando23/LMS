<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = [
            ['author' => 'eleonora', 'title' => 'mamma'],
            ['author' => 'andrea', 'title' => 'babba'],
            ['author' => 'luce', 'title' => 'cice']
          ];
        
        return view('books', ['books' => $books]);
    }

    public function show($id) {
        return view('details', ['id'=> $id]);
    }
}
