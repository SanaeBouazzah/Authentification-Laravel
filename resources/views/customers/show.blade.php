@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="container">
  <div class="bg-gray-100 min-h-screen">
    <a href="{{route('customers.index')}}" class="btn btn-primary m-4 px-4">Back</a>
  <ul>
    <li>{{$customer->id}}</li>
    <li>{{$customer->name}}</li>
    <li>{{$customer->details}}</li>
    <li><img src="/storage/{{$customer->image}}" alt=""></li>
  </ul>
  </div>
</div>
@endsection