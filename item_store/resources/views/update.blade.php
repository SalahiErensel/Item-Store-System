@extends('welcome')

@section('content')

<div class="col-md-4 m-auto border">

    <div class="cold-md-4 m-auto border text-center">

        <h4><b>Update Item</b></h4>

    </div>

    <form action="update" method="get">

        <div class="mb-4 mt-1">

            <label for="" class="fw-bold">Item Name</label>

            <input type="text" name="name" value="{{$name}}" class="form-control" id="">  

        </div>

        <div class="mb-4">

            <label for="" class="fw-bold">Item Price</label>

            <input type="text" name="price" value = "{{$price}}" class="form-control" id="">  

        </div>

        <br>

        <input type="hidden" name="id" value="{{$id}}">

        <button type="submit" class="btn btn-primary rounded-pill fw-bold">Update Item</button>

    </form>

</div>

@endsection