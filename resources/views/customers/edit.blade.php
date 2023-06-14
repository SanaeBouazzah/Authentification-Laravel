@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen pt-5">
  <div class="container">
  <a href="{{route('customers.index')}}" class="btn btn-primary m-4 px-4">Back</a>
  
<form action="{{route('customers.update', $customers['id'])}}" class="bg-light p-5 shadow-lg" method="POST" style="width:45%; margin:auto;">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Name:</label>
     <input type="text" name="name" class="form-control" value="{{$customers['name']}}">
   </div>
   <div class="mb-3">
    <label>details:</label>
     <input type="text" name="details" class="form-control" value="{{$customers['details']}}">
   </div>
   <div class="mb-3">
    <label>Image:</label>
<<<<<<< HEAD
     <input type="file" name="image" class="form-control" ><br/>
=======
     <input type="file" name="image" class="form-control" value="{{$customers['image']}}">
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267
     <span class="text-danger">
      @error('image')
         {{$message}}
     @enderror
     </span>
   </div>
   <div>
    <input type="submit" value="Save Changes" class="form-control btn btn-dark">
   </div>
 </form>
</div>
</div>
@endsection