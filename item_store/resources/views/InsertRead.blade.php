@extends('welcome')

@section('content')

<center>

<button type="button" class="btn btn-primary fw-bold mt-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

    Add Item

  </button>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

           <h5 class="modal-title fw-bold" id="staticBackdropLabel">Adding New Item </h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">

          <form action="insert_item" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <input type="text" placeholder="Enter Item Name" class="form-control" name="name" id="">

            </div>

            <div class="mb-3">

                <input type="text" placeholder="Enter Item Price" class="form-control" name="price" id="">
                
            </div>

            <div class="mb-3">

                <input type="file" class="form-control" name="image" id="">
                
            </div>

            <button type="submit" class="btn btn-primary fw-bold rounded-pill">Add Item</button>

          </form>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-danger fw-bold rounded-pill" data-bs-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</center>

<div class="container">

<table class="table mt-5">

    <thead class="">

        <th><b>#</b></th>

        <th><b>Item Name</b></th>

        <th><b>Item Price</b></th>

        <th><b>Item Image</b></th>

        <th><b>Update</b></th>

        <th><b>Delete</b></th>

    </thead>

    <tbody>

        @foreach ($data as $item)

        <tr>

            <form action="updatedelete" method="get">

            <td class="fw-bold pt-5"><input type="hidden" name="id" value="{{$item ['id']}}">{{$item ['id']}}</td>

            <td class="fw-bold pt-5"><input type="hidden" name="name" value="{{$item ['name']}}">{{$item ['name']}}</td>

            <td class="fw-bold pt-5"><input type="hidden" name="price" value="{{$item ['price']}}">{{$item ['price']}}</td>

            <td><img src="images/{{$item['image']}}" width="100px" height="100px" alt=""></td>

            <td><input type="submit" class="btn btn-warning rounded-pill fw-bold mt-4" value="update" name="update" id=""></td>

            <td><input type="submit" class="btn btn-danger rounded-pill fw-bold mt-4" value="delete" name="delete" id=""></td>

        </form>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection