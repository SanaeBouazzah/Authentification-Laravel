@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('customers.store')}}" class="bg-light p-4" method="POST">
          @csrf
          <div class="mb-3">
            <label>Name:</label>
             <input type="text" name="name" class="form-control" value="{{old('name')}}">
             <span class="text-danger">
              @error('name')
                 {{$message}}
             @enderror
             </span>
           </div>
           <div class="mb-3">
            <label>details:</label>
             <input type="text" name="details" class="form-control">
             <span class="text-danger">
              @error('details')
                 {{$message}}
             @enderror
             </span>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-dark" value="Add Customer">
          </div>
         </form>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class=" my-4">
    <table class="table rounded shadow-lg ">
        <thead class="bg-dark">
            <tr>
                <th class="text-white p-4">ID</th>
                <th class="text-white p-4">Name</th>
                <th class="text-white p-4">Details</th>
                <th class="text-white p-4 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
                <tr>
                    <td class="px-4">{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value['details'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('customers.show', $value->id) }}" class="mx-4 text-secondary">Show</a>
                        <a href="{{route('customers.edit',$value->id)}}" class="mx-4 text-secondary">Edit</a>
                        <form action="{{route('customers.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-dark px-5 mx-4">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>


<button type="button" class="btn btn-dark m-2 px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Customer
</button>
</div>
</div>
@endsection

<script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
  })
</script>