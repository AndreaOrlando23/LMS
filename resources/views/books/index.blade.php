@extends('layouts.app')

@section('content')
<h1>Books List</h1>
<button><a class="table" href="/books/create">Register a new book</a></button>
<table>
   <tr>
       <th>#</th>
       <th>Title</th>
       <th>Location</th>
       <th>Action</th>
   </tr>
   @foreach ($books as $book)
      <tr>
         <td><a class="table" href="/books/{{ $book->id }}">{{$book->id}}</td>
         <td>{{$book->title}}</td>
         <td>{{$book->location}}</td>
         <td class="edit"><a href="/edit-books/{{ $book->id }}">EDIT</a></td>
         </tr>
   @endforeach
</table>
<a href="/dashboard" class="back"><- Back to dashboard</a>
@endsection