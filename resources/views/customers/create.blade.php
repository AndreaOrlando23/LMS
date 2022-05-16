@extends('layouts.app')

@section('content')
<div class="wrapper create-customer">
    <h1>Register a new customer</h1>
    <form action="/customers" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="other">Other</option>
        </select>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course">
        <br><input type="submit" value="Register a customer">
    </form>
    <p class="mssg">{{ session('mssg') }}</p>
</div>
<a href="/customers" class="back"><- Back to all customers</a>
@endsection