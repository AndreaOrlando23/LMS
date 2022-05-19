@extends('layouts.app')

@section('content')
<div class="wrapper create-book">
    <h1>Edit book</h1>
    <form action="/edit-books/{{ $book->id }}" method="POST">
        {{ @csrf_field() }}
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value = "{{ old('title') ?? $book->title }}">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value = "{{ old('author') ?? $book->author }}">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="{{ old('category') ?? $book->category }}">IT</option>
            <option value="{{ old('category') ?? $book->category }}">Science</option>
            <option value="{{ old('category') ?? $book->category }}">Story</option>
            <option value="{{ old('category') ?? $book->category }}">Novels</option>
        </select>
        <label for="edition">Edition:</label>
        <input type="text" id="edition" name="edition" value = "{{ old('edition') ?? $book->edition }}">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value = "{{ old('location') ?? $book->location }}">
        <br><input type="submit" value="Edit">
    </form>
</div>
<a href="/books" class="back"><- Back to all books</a>
@endsection