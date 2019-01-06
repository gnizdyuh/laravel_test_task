@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary m-2">Go Back</a>
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
  <div class="card-body">
    <div class="form-group">
      Cover Image:<br>
      <img style="max-width: 50%" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
      <form method="post" action="{{ route('posts.update', $post->id) }}"  enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="title">Post Title:</label>
          <input type="text" class="form-control" name="title" value="{{ $post->title}}" />

        </div>
        <div class="form-group">
          <label for="body">Body :</label>
          <textarea type="text" class="form-control" name="body">{{ $post->body }}</textarea>
        </div>
         <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Change Cover Image</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="cover_image" aria-describedby="inputGroupFileAddon01" name="cover_image">
                  <label class="custom-file-label" for="cover_image">Choose file</label>
                </div>
              </div>
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection