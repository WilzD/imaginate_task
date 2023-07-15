@extends('layouts.inc.front')

@section ('title')
{{$category->name}}
@endsection

@section ('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top ">
    <div>
        <h6>COLLECTIONS/{{$category->name}}</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h3 style="text-align: center;">{{$category->name}} PRODUCTS</h3>
            @foreach($products as $prod)
            <div class="col-md-3 mb-3">
                <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                    <div class="card shadow">
                        <img src="{{asset('assets/upload/products/'.$prod->image)}}" alt="product image" class="trend_cate ">
                        <div class="card-body">
                            <h4>{{$prod->name}}</h4>
                            <span class="float-start" style="color:black;">{{$prod->selling_price}}</span>
                            <span class="float-end"><s style="color:darkgray;">{{$prod->original_price}}</s></span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection