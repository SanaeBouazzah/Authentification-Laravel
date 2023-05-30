@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">
<ul>
  <li>{{$customer->id}}</li>
  <li>{{$customer->name}}</li>
  <li>{{$customer->details}}</li>
</ul>
</div>
@endsection