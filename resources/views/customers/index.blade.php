@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">
  <a href="{{route('customers.create')}}" class="btn btn-primary m-2 px-4">Create</a>
  <div class="p-5">
<table class="table" style="border:1px solid #000;">
  <thead>
  <tr style="border:1px solid #000;">
    <td>ID</td>
    <td>Name</td>
    <td>Details</td>
    <td>Buttons</td>
  </tr>
</thead>
<tbody>
    @foreach ($customers as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value['details']}}</td>
        <td><a href="{{route('customers.show', $value->id)}}">SHOW</a></td>
        {{-- <td style="border:1px solid #000; padding:20px;"><a href="{{route('customers.delete')}}">Delete</a></td> --}}
    </tr>  
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection