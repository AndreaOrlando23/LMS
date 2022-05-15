@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="titles m-b-md">
            Books List
        </div>
        
        <!-- @for($i = 0; $i < 5; $i++)
          <p>the value of i is {{ $i }}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($books); $i++)
          <p>{{ $books[$i]['author'] }}</p>
        @endfor -->
    
        @foreach($books as $book)
          <div>
            <!-- {{ $loop->index }} - {{ $book['author'] }} - {{ $book['title'] }}
            @if($loop->first)
              <span> - first in the loop</span>
            @endif
            @if($loop->last)
              <span> - last in the loop</span>
            @endif -->

            {{ $book->id }} - {{ $book->title }} - {{ $book->author }} - {{ $book->category }} - {{ $book->location }}
     
          </div>
        @endforeach
        <a href="/books/create">Register a new book</a>
    </div>
</div>
@endsection