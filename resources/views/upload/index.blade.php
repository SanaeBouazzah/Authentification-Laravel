@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')

  <div class="container-fluid">
    <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
      <input type="file" >
    </form>
  </div>
@endsection