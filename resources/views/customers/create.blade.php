@extends('layouts.layout')
@section('title')
  Create Customer
@endsection
@section('content')

<form action="{{route('customers.store')}}" class="m-5 bg-light p-4" style="width:30%; margin:auto;" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name:</label>
     <input type="text" name="name" class="form-control">
   </div>
   <div class="mb-3">
    <label>details:</label>
     <input type="text" name="details" class="form-control">
   </div>
   <div class="d-grid">
     <button class="btn btn-primary btn-block my-2">Ajouter</button>
   </div>
 </form>

@endsection