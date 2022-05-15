@extends('layouts.layout')

@section('content')
<div class="wrapper customer-index">
  <h1>Customers List</h1>
  <button><a href="/customers/create">Register a customer</a></button>
  @foreach($customers as $customer)
  <div class="customers-item">
    <h4><a href="/customers/{{ $customer->id }}">{{ $customer->id }} - {{ $customer->name }} - {{ $customer->surname }} - {{ $customer->email }}</a></h4>
  </div>
  @endforeach
</div>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection