@extends('layouts.app')

@section('content')
<div class="wrapper create-customer">
    <h1>Edit customer</h1>
    <form action="/edit-customers/{{ $customer->id }}" method="POST">
        {{ @csrf_field() }}
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value = "{{ old('name') ?? $customer->name }}">
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" value = "{{ old('surnmane') ?? $customer->surname }}">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value = "{{ old('email') ?? $customer->email }}">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value = "{{ old('phone') ?? $customer->phone }}">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="other">Other</option>
        </select>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value = "{{ old('course') ?? $customer->course }}">
        <br><input type="submit" value="Edit">
    </form>
</div>
<a href="/customers" class="back"><- Back to all customers</a>
@endsection