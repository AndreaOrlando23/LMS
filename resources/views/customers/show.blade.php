@extends('layouts.app')

@section('content')
<div class="wrapper customer-details">
    <h1>Customer code: {{ $customer->id }}</h1>
    <p class="name">Name: {{ $customer->name }}</p>
    <p class="Surname">Surname: {{ $customer->surname }}</p>
    <p class="Email">Email: {{ $customer->email }}</p>
    <p class="Category">Category: {{ $customer->category }}</p>
</div>
<a href="/customers" class="back"><- Back to all customers</a>
@endsection