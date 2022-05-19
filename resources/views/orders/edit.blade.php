@extends('layouts.app')

@section('content')
<div class="wrapper create-order">
    <h1>Edit order</h1>
    <form action="/edit-orders/{{ $order->id }}" method="POST">
        {{ @csrf_field() }}
        @method('PUT')
        <label for="order_date">Order date:</label>
        <input type="date" id="order_date" name="order_date" value = "{{ old('order_date') ?? $order->order_date }}">
        <label for="return_date">Return date:</label>
        <input type="date" id="return_date" name="return_date" value = "{{ old('return_date') ?? $order->return_date }}">
        <label for="book_id">Book ID:</label>
        <input type="text" id="book_id" name="book_id" value = "{{ old('book_id') ?? $order->book_id }}">
        <label for="customer_id">Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" value = "{{ old('customer_id') ?? $order->customer_id }}">
        <br><input type="submit" value="Edit">
    </form>
</div>
<a href="/orders" class="back"><- Back to all orders</a>
@endsection