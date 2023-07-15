<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\product;


class Cart_Controller extends Controller
{
    public function addToCart(Request $req)
    {
        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');

        if (Auth::check()) 
        {
            $prod_check = product::where('id', $product_id)->first();

            if ($prod_check) 
            {
                if (cart::where('prod_id', $product_id)->where('user_id', Auth::user()->id)->exists()) 
                {
                    return response()->json(['status' => $prod_check->name . " Already exists in cart"]);
                }
                else{
                    $cartItem=new cart();
                    $cartItem->user_id=Auth::id();
                    $cartItem->prod_id=$product_id;
                    $cartItem->prod_qty=$product_qty;
                    $cartItem->save();
                    return response()->json(['status'=> $prod_check->name. " Added to cart"]);
                }
            }
            
        } else {
            return response()->json(['status', "Login to your account"]);
        }
    }

    public function show_cart(){
        return view('frontend.cart_index');
    }
}
