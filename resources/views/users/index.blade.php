@extends('layouts.layout')
@section('title')
  Login
@endsection
@section('content')



<form action="{{route('users.login')}}" method="post" class="w-50 p-4 shadow-lg mx-auto my-5">
    @csrf
    <div class="my-2">
      <label for="user">Username or Email :</label>
      <input type="text" name="user" id="user" class="form-control">
      @error('user')
          {{$message}}
      @enderror
    </div>
    <div class="my-2">
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>
    <div>
      <input type="submit" value="Log In" class="form-control mt-3 btn btn-dark">
    </div>
   </form>
@endsection