@extends('layouts.layout')
@section('title')
  Show Customers
@endsection
@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center 
bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Customers</h2>
   <div>
    <h2>{{$customer['name']}} and {{$customer['origin']}}</h2>
   </div>
</div>
@endsection