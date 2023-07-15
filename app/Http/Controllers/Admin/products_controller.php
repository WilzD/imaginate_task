<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\File;
use stdClass;

class products_controller extends Controller
{
    //
    public function show_index(){
        $products=product::all();
        return view('admin.products.products',compact('products'));
    }
    public function add_products(){
        $category=category::all();
        return view("admin.products.add_products",compact('category'));
       
    }
    public function insert_product(Request $req){
        $products=new product();
        if($req->hasFile('image')){
            $file=$req->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/upload/products',$filename);
            $products->image=$filename;
        }
        $products->cate_id=$req->input('cate_id');
        $products->name=$req->input('name');
        $products->slug=$req->input('slug');
        $products->small_description=$req->input('small_description');
        $products->description=$req->input('description');
        $products->original_price=$req->input('original_price');
        $products->selling_price=$req->input('selling_price');
        $products->qty=$req->input('qty');
        $products->tax=$req->input('tax');
        $products->status=$req->input('status')==TRUE ? '1' : '0';
        $products->trending=$req->input('trending')==TRUE ? '1' : '0';
        $products->meta_title=$req->input('meta_title');
        $products->meta_keyword=$req->input('meta_keyword');
        $products->meta_description=$req->input('meta_description');
        $products->save();
        return redirect('products')->with('status','Product added successfully !');
    }	
    
    public function edit_product($id){
        $products=product::find($id);
        return view('admin/products/edit_products',compact('products'));
    }


    public function update_product(Request $req, $id){
        $products=product::find($id);
       if($req->hasFile('image')){
        $path='assets/upload/products/'.$products->image;
        if (File::exists($path)) {
           File::delete($path);
        }
        $file=$req->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assets/upload/products',$filename);
        $products->image=$filename;
       }
       
        $products->name=$req->input('name');
        $products->slug=$req->input('slug');
        $products->small_description=$req->input('small_description');
        $products->description=$req->input('description');
        $products->original_price=$req->input('original_price');
        $products->selling_price=$req->input('selling_price');
        $products->qty=$req->input('qty');
        $products->tax=$req->input('tax');
        $products->status=$req->input('status')==TRUE ? '1' : '0';
        $products->trending=$req->input('trending')==TRUE ? '1' : '0';
        $products->meta_title=$req->input('meta_title');
        $products->meta_keyword=$req->input('meta_keyword');
        $products->meta_description=$req->input('meta_description');
        $products->update();
        return redirect('products')->with('status','product edited sucessfully');

    }
    public function delete_product($id){
        $products=product::find($id);
        if ($products->image) {
           $path='assets/upload/products'.$products->image;
           if (File::exists($path)) {
              File::delete($path);
           }
        }
        $products->delete();
        return redirect('products');
    }





}
