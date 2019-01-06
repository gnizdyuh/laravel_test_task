@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                    @if(count($posts)>1)
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{ $post->title }}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                <th></th>
                            </tr> 
                        @endforeach
                    @else
                        You are logged in!
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
