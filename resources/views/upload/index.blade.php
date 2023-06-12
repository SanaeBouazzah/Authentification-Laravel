@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')

  <div class="container-fluid my-5">
    <div class="success my-5">
      @if (session()->has('success'))
          {{session('success')}}
      @endif
    </div>
    <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="photo">
      <input type="submit" value="submit">
    </form>

    <hr>
    <br>
    <div>
      <ul>
        @foreach ($photos as $photo)
            <li>{{$photo->name}} <img src="" alt=""></li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection