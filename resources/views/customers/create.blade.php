@extends('layouts.layout')
@section('title')
  Create Customer
@endsection
@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center 
bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
   <div>
    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Create New Customer</h2>
    <form action="{{route('customers.store')}}" class="form bg-white p-6 border-1" method="POST">
      @csrf
      <div>
        <label for="name" class="text-sm">Name :</label>
        <input type="text" name="name" id="name" class="text-lg border-1">
      </div>
      <div>
        <label for="origin" class="text-sm">Origin :</label>
        <input type="text" name="origin" id="origin" class="text-lg border-1">
      </div>
      <div>
        <label for="price" class="text-sm">Price :</label>
        <input type="text" name="price" id="price" class="text-lg border-1">
      </div>
      
      <div>
        <input type="submit" value="Submit">
      </div>
    </form>
   </div>
</div>
@endsection