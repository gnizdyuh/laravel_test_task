@extends('layouts.app')

@section('content')
  
<h1>{{$title}}</h1>
<div class="jumbotron">
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="l-">{{$service}}</li>
             @endforeach 
        </ul>
    @endif
</div>

@endsection