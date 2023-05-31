@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">

  <div class="p-5">
<table style="border:1px solid #000;" class="table">
  <thead>
  <tr >
    <td style="border:1px solid #000; padding:20px;">Name:</td>
    <td style="border:1px solid #000; padding:20px;">Details</td>
    <td style="border:1px solid #000; padding:20px;">ID:</td>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach ($customers as $value)
        <td style="border:1px solid #000; padding:20px;">{{$value->id}}</td>
        <td style="border:1px solid #000; padding:20px;">{{$value->name}}</td>
        <td style="border:1px solid #000; padding:20px;">{{$value->details}}</td>
        <td style="border:1px solid #000; padding:20px;"><a href="{{route('customers.show', $customer->id)}}">SHOW</a></td>
        {{-- <td style="border:1px solid #000; padding:20px;"><a href="{{route('customers.delete')}}">Delete</a></td> --}}
    @endforeach
  </tr>
  </tbody>
</table>
</div>
</div>
@endsection