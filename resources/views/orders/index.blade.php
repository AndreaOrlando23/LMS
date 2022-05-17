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
   </tr>
   @foreach ($orders as $order)
      <tr>
         <td><a class="table" href="/orders/{{ $order->id }}">{{$order->id}}</td>
         <td>{{$order->order_date}}</td>
         <td>{{$order->return_date}}</td>
         <td>{{$order->book_id}}</td>
         <td>{{$order->customer_id}}</td>
         </tr>
    @endforeach
</table>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection


