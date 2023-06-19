@extends('layouts.layout')
@section('title')
  Sign Up
@endsection
@section('content')



<form action="{{route('users.signup')}}" method="post" class="w-50 p-4 shadow-lg mx-auto my-5">
    @csrf
    <div class="my-2">
      <label for="name">Username:</label>
      <input type="text" name="name" id="name" class="form-control">
      @error('name')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="my-2">
      <label for="email">Email Address:</label>
      <input type="email" name="email" id="email" class="form-control">
      @error('email')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="my-2">
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" class="form-control">
      @error('password')
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div>
      <input type="submit" value="Log In" class="form-control mt-3 btn btn-dark">
    </div>
   </form>
@endsection