@extends('layouts.layout')

@section('content')
<div class="wrapper book-index">
  <h1>Books List</h1>
  <button><a href="/books/create">Register a new book</a></button>
  @foreach($books as $book)
  <div class="book-item">
    <h4><a href="/books/{{ $book->id }}">{{ $book->id }} - {{ $book->title }} - {{ $book->location }}</a></h4>
  </div>
  @endforeach
</div>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection