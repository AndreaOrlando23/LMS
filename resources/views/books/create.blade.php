@extends('layouts.app')

@section('content')
<div class="wrapper create-book">
    <h1>Register a new book</h1>
    <form action="/books" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="it">IT</option>
            <option value="science">Science</option>
            <option value="story">Story</option>
            <option value="novels">Novels</option>
        </select>
        <label for="edition">Edition:</label>
        <input type="text" id="edition" name="edition">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location">
        <br><input type="submit" value="Register a book">
    </form>
    <p class="mssg">{{ session('mssg') }}</p>
</div>
<a href="/books" class="back"><- Back to all books</a>
@endsection