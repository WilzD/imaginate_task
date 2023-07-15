<?php

namespace App\Http\Controllers\prodManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\product;
use App\Models\category;



class ProdController extends Controller
{
    //
    public function index(){
        return view('prodManager.dashboard');
    }
    public function show_index(){
        $products=product::all();
        return view('prodManager.products.prodManager',compact('products'));
    }
    public function add_products(){
        $category=category::all();
        return view('prodManager.products.addProduct',compact('category'));

       
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
        return redirect('products_manager')->with('status','Product added successfully !');
    }	
    
    public function edit_product($id){
        $products=product::find($id);
        return view('prodManager/products/editProduct',compact('products'));
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
        return redirect('products_manager')->with('status','product edited sucessfully');

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
        return redirect('products_manager');
    }
}
