@extends('layouts.layout')
@section('title')
  Login
@endsection
@section('content')



   <form action="" method="post" class="">
    @csrf
    <div>
      <label for="user">Username or Email :</label>
      <input type="text" name="user" id="user" class="form-control">
    </div>
    <div>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>
    <div>
      <input type="submit" value="Log In" class="form-control">
    </div>
   </form>
@endsection