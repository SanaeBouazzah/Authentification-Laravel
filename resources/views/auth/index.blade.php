@extends('layouts.layout')
@section('title')
  Login
@endsection
@section('content')



   <form action="" method="post">
    @csrf
    <div>
      <label for="user">Username or Email :</label>
      <input type="text" name="user" id="user">
    </div>
    <div>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <input type="submit" value="Log In">
    </div>
   </form>
@endsection