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
    @foreach ($customers as $customer)
        <td style="border:1px solid #000; padding:20px;">{{$customer->id}}</td>
        <td style="border:1px solid #000; padding:20px;">{{$customer->name}}</td>
        <td style="border:1px solid #000; padding:20px;">{{$customer->details}}</td>
    @endforeach
  </tr>
  </tbody>
</table>
</div>
</div>
@endsection