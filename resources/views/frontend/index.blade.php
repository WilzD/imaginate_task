@extends('layouts.inc.front')

@section ('title')
Welcome to Ecommerce site
@endsection

@section ('content')
@include('layouts.inc.frontSlider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h3 style="text-align: center;">Featured Products</h3>
            <div class="owl-carousel featured-Carousel owl-theme">
                @foreach($featured_product as $item)
                <div class="item">
                    <a href="{{url('category/'.$item->category->slug.'/'.$item->slug)}}" style="text-decoration: none;">
                        <div class="card shadow">
                            <img src="{{asset('assets/upload/products/'. $item->image)}}" alt="product image" class="trend_product">
                            <div class="card-body">
                                <h4>{{$item->name}}</h4>
                                <span class="float-start" style="color:black;">{{$item->selling_price}}</span>
                                <span class="float-end"><s style="color:darkgray;">{{$item->original_price}}</s></span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h3 style="text-align: center;">Featured category</h3>
            <div class="owl-carousel featured-Carousel owl-theme">
                @foreach($featured_category as $item)
                <div class="item">
                    <a href="{{url('view-cat-product/'.$item->slug)}}" style="text-decoration: none;">
                        <div class="card shadow">
                            <img src="{{asset('assets/upload/category/'. $item->image)}}" alt="category image" class="trend_product">
                            <div class="card-body">
                                <h4>{{$item->name}}</h4>
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
@endsection

@section('scripts')
<script>
    $('.featured-Carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>

@endsection