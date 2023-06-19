@extends('layouts.layout')
@section('title')
  Login
@endsection
@section('content')
<section class="vh-100">
  <div class="container h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 mt-5 shadow-lg  mx-auto p-5 rounded">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{route('users.check')}}">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 mx-auto my-3">Log In</p>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control"
              placeholder="Enter a valid email address" value="{{old('email')}}"/>
              @error('email')
                  <span class="text-danger">{{$message}}</span>
              @enderror
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control"
              placeholder="Enter password" value="{{old('password')}}"/>
              @error('password')
                  <span class="text-danger">{{$message}}</span>
              @enderror
          </div>

          <div class="text-center mt-4 pt-2">
            <input type="submit" class="btn btn-dark rounded-0 px-5 " value="Login">
            <p class="small fw-bold mt-4 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Sign Up</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection