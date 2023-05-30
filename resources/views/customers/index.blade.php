@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center 
bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  {{-- <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Customers</h2> --}}
   @if (count($customers) >0)
   <ul>
      @foreach ($customers as $customer)
            <li>{{$customer['id']}} <a href="{{route('customers.show')}}">go</a></li>
            <li>{{$customer['name']}} <a href="{{route('customers.show')}}">go</a></li>
            <li>{{$customer['origin']}} <a href="{{route('customers.show')}}">go</a></li>
        @endforeach
      </ul>
   @else
       <p>No DATA Here</p>
   @endif
</div>
@endsection