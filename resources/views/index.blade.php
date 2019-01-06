@extends('layouts.app')

@section('content')

  <h1>Welcome to {{ config('app.name', 'Laravel') }}!</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 
 @guest
    <a class="btn btn-primary btn-lg" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
    	<a class="btn btn-success btn-lg" role="button" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@else
    <div class="jumbotron"> 
    	Hello, {{ Auth::user()->name }}!
    	<a href="/dashboard">Dashboard</a>
    </div>
@endguest

@endsection