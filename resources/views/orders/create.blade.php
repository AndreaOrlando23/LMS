@extends('layouts.app')

@section('content')
<div class="wrapper create-order">
    <h1>Register a new order</h1>
    <form action="/orders" method="POST">
        @csrf
        <label for="order_date">Order date:</label>
        <input type="date" id="order_date" name="order_date">
        <label for="return_date">Return date:</label>
        <input type="date" id="return_date" name="return_date">
        <label for="book_id">Book ID:</label>
        <input type="text" id="book_id" name="book_id">
        <label for="customer_id">Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id">
        <br><input type="submit" value="Register a order">
    </form>
    <p class="mssg">{{ session('mssg') }}</p>
</div>
<a href="/orders" class="back"><- Back to all books</a>
@endsection