<!-- <h1>this is category page</h1> -->
@extends('layouts.inc.front')

@section ('title')
Welcome to Ecommerce site
@endsection

@section ('content')


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($category as $item)
                    <div class="col-md-3 mb-3">
                        <a href="{{url('view-cat-product/'.$item->slug)}}" style="text-decoration: none;">
                            <div class="card shadow">
                                <img src="{{asset('assets/upload/category/'. $item->image)}}" alt="product image" class="trend_cate">
                                <div class="card-body">
                                    <h5 style="text-align: center; color:blue">{{$item->name}}</h5>
                        </a>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>




@endsection