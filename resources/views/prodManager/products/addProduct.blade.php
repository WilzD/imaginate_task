@extends('layouts/prodManager')
@section('content')
<div class="card ">
    <div class="card-header">
        <h2 style="color:white ;text-align:center;">Add products</h2>
    </div>
    <div class="card-body">
        <form action="{{url('insert-products_manager')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12 md-3">
                    <select class="form-select" name="cate_id" aria-label="Default select example">
                        <option>Select a category</option>
                        @foreach($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="4" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="4" class="form-control"></textarea>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" name="original_price">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty"  class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" name="tax" class="form-control">
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">status</label>
                    <input type="checkbox" class="form-control" name="status">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" class="form-control" name="trending">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                     <textarea name="meta_description"  rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta keyword</label>
                     <textarea name="meta_keyword"  rows="1" class="form-control"></textarea>
                </div>
               

                <div class="col-md-12 mb-3">
                    <input type="file" name="image" id="" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection