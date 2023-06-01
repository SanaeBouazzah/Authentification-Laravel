@extends('layouts.layout')
@section('title')
  Customers
@endsection
@section('content')
<div class="bg-gray-100 min-h-screen">
  {{-- <a href="{{route('customers.create')}}" class="btn btn-primary m-2 px-4">Create</a> --}}
 <button type="button" class="btn btn-primary m-2 px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Customer
</button>

<!-- Modal -->
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
    </div>
  </div>
</div>



  <div class="p-5">
    <table class="table" style="border:1px solid #000;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value['details'] }}</td>
                    <td>
                        <a href="{{ route('customers.show', $value->id) }}">SHOW</a>
                        <form action="{{ route('customers.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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