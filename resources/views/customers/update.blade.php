@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">
<form action="{{route('customers.store')}}" class="bg-light p-4" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name:</label>
     <input type="text" name="name" class="form-control">
   </div>
   <div class="mb-3">
    <label>details:</label>
     <input type="text" name="details" class="form-control">
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-primary" value="Add Customer">
  </div>
 </form>

</div>
@endsection