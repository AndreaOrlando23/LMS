@extends('layouts.app')

@section('content')
<div class="wrapper order-details">
    <h1>Order code: {{ $order->id }}</h1>
    <p class="date">Order date: {{ $order->order_date }}</p>
    <p class="date">Return date: {{ $order->return_date }}</p>
    <p class="book_id">Book ID: {{ $order->book_id }}</p>
    <p class="customer_id">Customer_ID: {{ $order->customer_id }}</p>
<form action="/orders/{{ $order->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
</form>
</div>
<a href="/orders" class="back"><- Back to all orders</a>
@endsection