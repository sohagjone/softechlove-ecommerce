<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Validator;
use Session;
use DB;
use Image;
use Carbon\Carbon;



class ProductController extends Controller
{
    public function product_form_show()
    {
    	$categories = Category::all();
    	return view('admin.product.product_form', ['categories'=>$categories]);
    }
    public function productSave(Request $request)
    {   
    	  $validatedData = $request->validate([
        'product_name' => 'required',
       	'category_id' => 'required',
        'product_short_description' => 'required',
        'product_long_description' => 'required',
        'product_price' => 'required',
        'product_image' => 'required',
        'publication_status' => 'required',
    	]);

      $present_id = DB::table('products')->insertGetId([
        'product_name'=> $request->product_name,
        'category_id' => $request->category_id,
        'product_short_description' => $request->product_short_description,
        'product_long_description' => $request->product_long_description,
        'product_price' => $request->product_price,
        'publication_status' => $request->publication_status,
        'created_at' =>Carbon::now(),
      ]);
      if($request->hasFile('product_image'))
      {
        $file_name = $present_id.'.'.$request->product_image->getClientOriginalExtension();
        Image::make($request->product_image)->save(base_path('public/uploads/'.$file_name), 50);
        DB::table('products')
        ->where('id', $present_id)
        ->update([
          'product_image'=>$file_name, 
        ]);
        
      }
      return back()->with('product_add_msg', 'Product Added Successfully');
     }
   

     public function product_manage_view()
     {

      $products = Product::orderBy('id', 'DESC')->paginate(4);
      return view('admin.product.product_manage', ['products'=>$products]);
     }
      public function delete_product_manage_view()
     {
        $softDeleteProducts = Product::onlyTrashed()->paginate(5);
        return view('admin.product.delete_product_manage', ['softDeleteProducts'=>$softDeleteProducts]);
     }
     public function restore_product_manage_view($pro_id)
     {
       Product::withTrashed()->where('id', $pro_id)->restore();
       return back()->with('product_restore_msg', 'Product Restored Successfully');
        
     }
      public function force_delete_product($pro_id)

     {
        $product = Product::onlyTrashed()->find($pro_id);
        if($product->product_image == 'default.img.jpg')
        {
          Product::onlyTrashed()->find($pro_id)->forceDelete();
          return back()->with('unpublished_msg','Product Permanent Delete Successfully');
        }
        else
        {
          unlink(base_path('public/uploads/'.$product->product_image));
          Product::withTrashed()->where('id', $pro_id)->forceDelete();
         return back()->with('product_force_delete_msg', 'Product Permenant Delete Successfully');
        }      
        
     }
     public function product_unpublish($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
    return back()->with('publish_status_message', 'Product Unpublished Successfully');
    }
    public function product_publish($id)
    {
        $product= Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return back()->with('unpublish_status_message', 'Product Published Successfully');
    }
    public function product_delete($id)
    {
        Product::find($id)->delete();
        return back()->with('delete_message', 'Product Deleted Successfully');
    }
    public function product_edit_form($id)
    {
        
        $categories = Category::all();
        $product = DB::table('products')->where('id', $id)->first();    
        return view('admin.product.product_edit_form', ['product'=>$product, 'categories' => $categories]);
    }

    public function product_update(Request $request)
    {
        //return $request->all();
        $validatedData = $request->validate([
        'product_name' => 'required',
        'category_id' => 'required',
        'product_short_description' => 'required',
        'product_long_description' => 'required',
        'product_price' => 'required',
        'publication_status' => 'required',
        'product_image' => 'required',
        ]);
        DB::table('products')->where('id', $request->product_id)->update([
            'product_name'=> $request->product_name,
            'category_id' => $request->category_id,
            'product_short_description' => $request->product_short_description,
            'product_long_description' => $request->product_long_description,
            'product_price' => $request->product_price,
            'publication_status' => $request->publication_status
            ]);
        if($request->hasFile('product_image'))
      {

        $product = Product::find($request->product_id);
        if($product->image == 'default.img.jpg')
        {
          $file_name = $request->product_id.'.'.$request->product_image->getClientOriginalExtension();
          Image::make($request->product_image)->save(base_path('public/uploads/'.$file_name), 50);
          DB::table('products')
        ->where('id', $request->product_id)
        ->update([
          'product_image'=>$file_name, 
        ]);

        }else
        {
          unlink(base_path('public/uploads/'.$product->product_image));
          $file_name = $request->product_id.'.'.$request->product_image->getClientOriginalExtension();
          Image::make($request->product_image)->save(base_path('public/uploads/'.$file_name), 50);
          DB::table('products')
        ->where('id', $request->product_id)
        ->update([
          'product_image'=>$file_name, 
        ]);
        }      
                     
      }
        
      return back()->with('product_update_msg', 'Product Update Successfully');
    }
}
