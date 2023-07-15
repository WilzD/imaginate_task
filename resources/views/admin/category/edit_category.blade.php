@extends('layouts/admin')
@section('content')
<div class="card ">
    <div class="card-header">
        <h2 style="color:white ;text-align:center;">Edit/Update Category</h2>
    </div>
    <div class="card-body">
        <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                     <textarea name="description"  rows="4" class="form-control">{{$category->description}}</textarea>
                </div>
                    

              
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" class="form-control" name="status" {{$category->status =='1' ? 'checked' : ''}}>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" class="form-control" name="popular" {{$category->popular == '1' ? 'checked' : ''}}>
                    <!-- if poplar is 1 then checked otherwise null  -->
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{$category->meta_title}}">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                     <textarea name="meta_descrip"  rows="3" class="form-control">{{$category->meta_descrip}}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta keyword</label>
                     <textarea name="meta_keyword"  rows="3" class="form-control">{{$category->meta_keyword}}</textarea>
                </div>

                @if($category->image)
                    <img src="{{asset('assets/upload/category/'.$category->image)}}" alt="category image here" class="cat-img">
                @endif
               <div class="col-md-12 mb-3">
                   <input type="file" name="image" id="" class="form-control">
               </div>
                
               <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
               </div>

            </div>
        </form>
    </div>
</div>
@endsection