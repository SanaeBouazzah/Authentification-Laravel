@extends('layouts.layout')
@section('title')
  Create Customer
@endsection
@section('content')

<form action="">
  @csrf
  <div class="mb-3">
    <label>Name:</label>
     <input type="text" name="name" class="form-control" value="{{old('name')}}">
   </div>
   <div class="mb-3">
    <label>details:</label>
     <input type="text" name="email" class="form-control" value="{{old('email')}}">
   </div>
   <div class="d-grid">
     <button class="btn btn-primary btn-block my-2">Ajouter</button>
   </div>
 </form>

@endsection