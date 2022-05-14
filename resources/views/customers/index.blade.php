@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Cusotmers List
        </div>
    
        @foreach($customers as $customer)
          <div>
            {{ $customer->id }} - {{ $customer->name }} - {{ $customer->surname }} - {{ $customer->email }}
          </div>
        @endforeach

    </div>
</div>
@endsection