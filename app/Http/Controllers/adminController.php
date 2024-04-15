<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->name_category;
        $data->description = $request->description_category;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully');
    }
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function view_product(){
        $data = Product::all();
        return view('admin.product',compact('data'));
    }

    public function add_product(Request $request){
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $request->image;
        $data->category = $request->category;
        $data->quality = $request->quality;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->save();
        return redirect()->back()->with('message','Product created Successfully');
    }

    public function add_product_view(){
        return view('admin.add_product');
    }
    public function delete_product($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    
    public function edit_product($id){
        $data = Product::find($id);
        return view('admin.edit_product',compact('data'));
    }
    public function save_edit(Request $request,$id){
        $data=Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $request->image;
        $data->category = $request->category;
        $data->quality = $request->quality;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price; 
        // date("Y-m-d H:i:s")
        $data ->save();
        return redirect()->back()->with('message', 'Product editted successfully');
    } 
}
