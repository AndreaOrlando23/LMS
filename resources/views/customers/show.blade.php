@extends('layouts.app')

@section('content')
<div class="wrapper customer-details">
    <h1>Customer code: {{ $customer->id }}</h1>
    <p class="name">Name: {{ $customer->name }}</p>
    <p class="surname">Surname: {{ $customer->surname }}</p>
    <p class="email">Email: {{ $customer->email }}</p>
    <p class="category">Category: {{ $customer->category }}</p>
    <p class="course">Course: {{ $customer->course }}</p>
</div>
<a href="/customers" class="back"><- Back to all customers</a>
@endsection