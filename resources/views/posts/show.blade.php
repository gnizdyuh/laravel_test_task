@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary">Go Back</a>
	<a href="/posts" class="btn btn-info">Edit</a>
	<a href="/posts" class="btn btn-danger">Delete</a>
	<h1>{{$post->title}}</h1>
	
	<div>
		{{$post->body}}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
@endsection