
@extends('layouts/admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h2 style="color:white; text-align:center">Products</h2>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
        <thead class="head">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Product</th>
                <th>Selling price</th>
                <th>Original Price</th>
                <th>IMAGE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody></tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>

                <td>{{$item->category->name}}</td> 
                <!-- here we are calling the function category of model products in which the product and category table are joined -->
        
                <td>{{$item->name}}</td>
                <td>{{$item->selling_price}}</td>
                <td>{{$item->original_price}}</td>

               
                <td> <img src="{{asset('assets/upload/products/'.$item->image)}}" class="cat-img" alt="image here"></td>
                <td> 
                   <a href="{{url('edit_products/'.$item->id)}}" class="btn btn-primary">Edit</a>
                   <a href="{{url('delete_products/'.$item->id)}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection