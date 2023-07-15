<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\product;


class FrontendController extends Controller
{
    //
    public function index()
    {
        $featured_product = product::where('trending', '1')->take(15)->get();
        $featured_category = category::where('popular', '1')->take(15)->get();
        return view('frontend.index', compact('featured_category', 'featured_product'));
    }
    public function category()
    {
        $category = category::where('status', '0')->take(15)->get();
        return view('frontend.category', compact('category'));
    }
    public function cat_product($slug)
    {
        if (category::where('slug', $slug)->exists()) {
            $category = category::where('slug', $slug)->first();
            $products = product::where('cate_id', $category->id)->where('status', '1')->get();
            return view('frontend.products.product_index', compact('category', 'products'));
        } else {
            return redirect('/')->with('status', 'Slug Not Found');
        }
    }

    public function product_detail($cate_slug,$prod_slug){
        if (category::where('slug',$cate_slug)->exists()) {
            if(product::where('slug',$prod_slug)->exists()){
                $products=product::where('slug',$prod_slug)->first();
               return view('frontend.products.product_detail',compact('products'));
            }
            else {
                return view('/')->with('status',"the link has been broken");
            }
        
        }
        else {
            return view('/')->with('status','No such product found');
        }
    }

    public function check(){
        return "this is the check class";
    }
}
