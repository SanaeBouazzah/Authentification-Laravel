@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center 
bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

<table style="border:1px solid #000;">
  <tr >
    <td style="border:1px solid #000; padding:20px;">Name:</td>
    <td style="border:1px solid #000; padding:20px;">Details</td>
    <td style="border:1px solid #000; padding:20px;">ID:</td>
  </tr>
  <tr>
        <td style="border:1px solid #000; padding:20px;">1</td>
        <td style="border:1px solid #000; padding:20px;">ali</td>
        <td style="border:1px solid #000; padding:20px;">some of text here</td>
  </tr>
</table>
</div>
@endsection