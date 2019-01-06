@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary">Go Back</a>
@if(!Auth::guest())
	@if(Auth::user()->id == $post->user_id)
	
		<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
		<form action="{{ route('posts.destroy', $post->id)}}" method="post" class="btn p-0">
		  @csrf
		  @method('DELETE')
		  <button class="btn btn-danger" type="submit">Delete</button>
		</form>
	@endif	
@endif
	<h1>{{$post->title}}</h1>
	<img style="max-height: 60vh" src="/storage/cover_images/{{$post->cover_image}}">
	<div class="m-2">
		{{$post->body}}
	</div>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
@endsection