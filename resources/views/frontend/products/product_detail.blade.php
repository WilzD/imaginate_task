@extends('layouts.inc.front')

@section ('title')
{{$products->slug}}
@endsection

@section ('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top ">
    <div>
        <h6>COLLECTIONS/{{$products->category->name}}/{{$products->name}}</h6>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/upload/products/'.$products->image)}}" class="trend_cate">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">{{$products->name}}</h2>
                    @if($products->trending =='1')
                    <label for="" class=" float-end badge bg-success trending_label">Trending</label>
                    @endif


                    <hr>
                    <label class="me-3"> <s>{{$products->original_price}}</s></label>
                    <label class="fw-bold">{{$products->selling_price}}</label>

                    <p class="mt-3">
                        {{ $products->description }}
                    </p>

                    <hr>
                    @if($products->qty > 0)
                    <label class="bg-success badge">In Stock</label>
                    @else
                    <label class="bg-danger badge">Out Of Stock</label>
                    @endif

                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="{{$products->id}}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" class="form-control text-center qty-input" name="quantity" value="1">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br />
                            <button type="button" class="btn btn-success me-3 float-start">Add To Wishlist <i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-primary me-3 float-start AddToCart">Add To cart</button>
                            <button type="button" class="btn btn-warning me-3 float-start razorpay_btn">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // this is for the quantity
    $(document).ready(function() {
        $('.increment-btn').click(function(e) {
            e.preventDefault();
            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $('.qty-input').val(value);

            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();
            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $('.qty-input').val(value);

            }
        });

        // this is add product to cart 
        $('.AddToCart').click(function(e) {
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();
            // alert(product_id);
            // alert(product_qty);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/addtocart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty,
                },

                success: function(response) {
                    alert(response.status);
                },
                error:function(xhr){
                 console.log(xhr.responseText);
                }
            });
        });
    });


    $
</script>
@endsection