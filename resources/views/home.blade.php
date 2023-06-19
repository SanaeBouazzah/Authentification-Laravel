@extends('layouts.layout')
@section('title')
  Home
@endsection
@section('content')
<div class="container">
  <div class="success my-5">
    @if (session()->has('success'))
        <span class="alert alert-success form-control" role="alert"> {{session('success')}}</span>
    @endif
  </div>


  
  <div  class="mx-auto w-2">
    <h2>Home</h2>  
  </div>
</div>
@endsection