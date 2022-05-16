@extends('layouts.app')

@section('content')
<div class="wrapper book-details">
    <h1>Book code: {{ $book->id }}</h1>
    <p class="title">Title: {{ $book->title }}</p>
    <p class="author">Author: {{ $book->author }}</p>
    <p class="category">Category: {{ $book->category }}</p>
    <p class="edition">Edition: {{ $book->edition }}</p>
    <p class="location">Location: {{ $book->location }}</p>
<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Book</button>
</form>
</div>
<a href="/books" class="back"><- Back to all books</a>
@endsection