@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Book List
        </div>
        
        <!-- @for($i = 0; $i < 5; $i++)
          <p>the value of i is {{ $i }}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($books); $i++)
          <p>{{ $books[$i]['author'] }}</p>
        @endfor -->

        @foreach($books as $book)
          <div>
            {{ $loop->index }} - {{ $book['author'] }} - {{ $book['title'] }}
            @if($loop->first)
              <span> - first in the loop</span>
            @endif
            @if($loop->last)
              <span> - last in the loop</span>
            @endif
          </div>
        @endforeach

    </div>
</div>
@endsection