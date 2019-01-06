@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts)>0)
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img class="img-fluid img-thumbnail" src="/storage/cover_images/{{ $post->cover_image }}">
					</div>
					<div class="col-md-8 col-sm-8">
					<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
					<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
					</div>
				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No post found</p>
	@endif
	@if(!Auth::guest())
		<a href="/posts/create" class="btn btn-primary m-2">Create Post</a>
	@endif
@endsection