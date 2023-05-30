@extends('layouts.layout')
@section('title')
  Create Customer
@endsection
@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center 
bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Create New Customer</h2>
   <div>
    <form action="">
      <div>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name">
      </div>
      <div>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
      </div>
      <div>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </div>
      <div>
        <input type="submit" value="Submit">
      </div>
    </form>
   </div>
</div>
@endsection