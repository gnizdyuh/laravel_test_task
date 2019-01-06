@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary m-2">Go Back</a>
<div class="card uper">
  <div class="card-header">
    Add post
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="title">Title: </label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="body">Body: </label>
              <input type="textarea" class="form-control" name="body"/>
          </div>
          <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Cover Image</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="cover_image" aria-describedby="inputGroupFileAddon01" name="cover_image">
                  <label class="custom-file-label" for="cover_image">Choose file</label>
                </div>
              </div>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection