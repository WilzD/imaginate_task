@extends('layouts/admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h2 style="color:white; text-align:center">Categories</h2>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
        <thead class="head">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody></tbody>
            @foreach($category as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
               
                <td> <img src="{{asset('assets/upload/category/'.$item->image)}}" class="cat-img" alt="image here"></td>
                <td> 
                   <a href="{{url('edit_category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                   <a href="{{url('delete_category/'.$item->id)}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection