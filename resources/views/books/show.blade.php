@extends('layouts.layout')

@section('content')
<div class="wrapper book-details">
    <h1>Book code: {{ $book->id }}</h1>
    <p class="title">Title: {{ $book->title }}</p>
    <p class="author">Author: {{ $book->author }}</p>
    <p class="category">Category: {{ $book->category }}</p>
    <p class="edition">Edition: {{ $book->edition }}</p>
    <p class="location">Location: {{ $book->location }}</p>
</div>
<a href="/books" class="back"><- Back to all books</a>
@endsection