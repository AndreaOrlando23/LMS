@extends('layouts.app')
@section('content')
<h1>Customers List</h1>
<button><a href="/customers/create">Register a new customer</a></button>
<table>
   <tr>
       <th>#</th>
       <th>Name</th>
       <th>Surname</th>
       <th>Email</th>
       <th>Action</th>
   </tr>
   @foreach ($customers as $customer)
      <tr>
         <td><a href="/customers/{{ $customer->id }}"> {{$customer->id}}</td>
         <td>{{$customer->name}}</td>
         <td>{{$customer->surname}}</td>
         <td>{{$customer->email}}</td>
         <td class="edit"><a href="/edit-customers/{{ $customer->id }}">EDIT</a></td>
         </tr>
   @endforeach
</table>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection