@extends('layouts/admin')
@section('content')
<div class="card ">
    <div class="card-header">
        <h2 style="color:white ;text-align:center;">Edit/ Update products</h2>
    </div>
    <div class="card-body">
        <form action="{{url('update-products/'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-12 md-3">
                    <label for="">Category</label>
                    <select class="form-select">
                        <option value="">{{$products->category->name}}</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$products->name}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$products->slug}}">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="4" class="form-control">{{$products->small_description}}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="4" class="form-control">{{$products->description}}</textarea>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" name="original_price" value="{{$products->original_price}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price" value="{{$products->selling_price}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty"  class="form-control" value="{{$products->qty}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" name="tax" class="form-control" value="{{$products->tax}}">
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">status</label>
                    <input type="checkbox" class="form-control" name="status" {{$products->status=='1' ? 'checked' : ''}}>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" class="form-control" name="trending" {{$products->trending=='1' ? 'checked' : ''}}>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{$products->meta_title}}">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                     <textarea name="meta_description"  rows="3" class="form-control">{{$products->meta_description}}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta keyword</label>
                     <textarea name="meta_keyword"  rows="1" class="form-control">{{$products->meta_keyword}}</textarea>
                </div>
               

                @if($products->image)
                    <img src="{{asset('assets/upload/products/'.$products->image)}}" alt="product image here" class="cat-img">
                @endif
               <div class="col-md-12 mb-3">
                   <input type="file" name="image" id="" class="form-control">
               </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection