<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class categoryController extends Controller
{
    public function index() {
     $category=category::all();
     return view('admin.category.category',compact('category'));
    }
    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $req){
        $category=new category();
         
        if($req->hasFile('image')){
            $file=$req->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/upload/category',$filename);
            $category->image=$filename;
        }
        $category->name=$req->input('name');
        $category->slug=$req->input('slug');
        $category->description=$req->input('description');
        $category->status=$req->input('status') == TRUE ? '1':'0';
        $category->popular=$req->input('popular') == TRUE ? '1':'0';
        $category->meta_title=$req->input('meta_title');
        $category->meta_descrip=$req->input('meta_descrip');
        $category->meta_keyword=$req->input('meta_keyword');
        $category->save();
        return redirect('/dashboard')->with('status','category added sucessfully');
	


    }

    public function edit_product($id){
        $category=category::find($id);
        return view('admin.category.edit_category',compact('category'));
    }
    public function update_product(Request $req, $id){
        $category=category::find($id);
       if($req->hasFile('image')){
        $path='assets/upload/category/'.$category->image;
        if (File::exists($path)) {
           File::delete($path);
        }
        $file=$req->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assets/upload/category',$filename);
        $category->image=$filename;
       }
       $category->name=$req->input('name');
        $category->slug=$req->input('slug');
        $category->description=$req->input('description');
        $category->status=$req->input('status') == TRUE ? '1':'0';
        $category->popular=$req->input('popular') == TRUE ? '1':'0';
        $category->meta_title=$req->input('meta_title');
        $category->meta_descrip=$req->input('meta_descrip');
        $category->meta_keyword=$req->input('meta_keyword');
        $category->update();
        return redirect('/dashboard')->with('status','category edited sucessfully');

    }

    public function delete_product($id){
        $category=category::find($id);
        // this will delete the image 
        if($category->image){
            $path='assets/upload/category/'.$category->image;
            if (file::exists($path)) {
                file::delete($path);
            }
        }
        // and this will delete the other data
        $category->delete();
        return redirect('categories')->with('status','Category deleted sucessfully !');
    }
}
