<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	//return $request->all();
    	 $product = Product::find($request->product_id);
    	 //return $product->product_image;
    	Cart::add([
      			'id' => $product->id,
      			'name' => $product->product_name,
      			'price' => $product->product_price,
      			'quantity' => $request->product_quantity,
      			'attributes' => [
      					'product_image'=> $product->product_image,
      				]
      ]);
    return  redirect()->route('shop_page_view', ['product_id'=>$product->category_id]);	

    }
    public function cart_item_revove($product_id)
    {
    	Cart::remove($product_id);
    	return back();
    }
    public function cart_update(Request $request)
    {
   
    	Cart::update($request->product_id, array(
  				'quantity' => array(
      			'relative' => false,
      			'value' => $request->product_quantity
  		),
		));
    	return back();
    }
}
