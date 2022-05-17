@extends('layouts.app')

@section('content')
<h1>Books List</h1>
<button><a class="table" href="/books/create">Register a new book</a></button>
<table>
   <tr>
       <th>#</th>
       <th>Title</th>
       <th>Location</th>
   </tr>
   @foreach ($books as $book)
      <tr>
         <td><a class="table" href="/books/{{ $book->id }}">{{$book->id}}</td>
         <td>{{$book->title}}</td>
         <td>{{$book->location}}</td>
         </tr>
   @endforeach
</table>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection


