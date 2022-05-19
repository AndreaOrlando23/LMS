@extends('layouts.app')

@section('content')
<h1>Orders List</h1>
<button><a class="table" href="/orders/create">Register a new order</a></button>
<table>
   <tr>
       <th>#</th>
       <th>Order Date</th>
       <th>Return Date</th>
       <th>Book ID</th>
       <th>Cutomer ID</th>
       <th>Action</th>
   </tr>
   @foreach ($orders as $order)
      <tr>
         <td><a class="table" href="/orders/{{ $order->id }}">{{$order->id}}</td>
         <td>{{$order->order_date}}</td>
         <td>{{$order->return_date}}</td>
         <td><a class="table" href="/books/{{ $order->book_id }}">{{$order->book_id}}</td>
         <td><a class="table" href="/customers/{{ $order->customer_id }}">{{$order->customer_id}}</td>
         <td><a href="/edit-orders/{{ $order->id }}">EDIT</a></td>
         </tr>
    @endforeach
</table>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection
