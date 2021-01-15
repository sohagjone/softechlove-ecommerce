<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use Mail;
use App\Mail\SentCustomer;
use Session;
use App\Order;
use App\OrderDetail;
use Validator;
use Cart;
use PDF;
class CheckoutController extends Controller
{
   public function customer_form()
   {
   	 return view('frontend.checkout.checkout_form');
   }
   public function customer_signup(Request $request)
   {
   	 	
        $validatedData = $request->validate([
        'email_address' => 'required|unique:customers,email_address',
        'phone_number' => 'required|unique:customers,phone_number'
      ]);
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email_address = $request->email_address;
    	$customer->password = bcrypt($request->password);
    	$customer->phone_number = $request->phone_number;
    	$customer->address= $request->address;
    	$customer->save();

      Session::put(['customer_id'=>$customer->id]);
      Session::put(['customer_name'=> $customer->first_name.' '.$customer->last_name]);
      Mail::to($customer->email_address)->send(new SentCustomer($customer));
        return redirect('/checkout/shipping');

   }
   public function shipping_form()
   {
     $customer =  Customer::find(Session::get('customer_id'));
     return view('frontend.checkout.shipping_form', ['customer'=>$customer]);
   }
   public function shipping_info_save(Request $request)
   {
      $shipping = new Shipping();
      $shipping->full_name = $request->full_name;
      $shipping->email_address = $request->email_address;
      $shipping->password = bcrypt($request->password);
      $shipping->phone_number = $request->phone_number;
      $shipping->address= $request->address;
      $shipping->save();

      Session::put(['shipping_id'=>$shipping->id]);
      return redirect('/checkout/payment');
   }
   public function payment_form()
   {
    return view('frontend.checkout.payment_form');
   }

   public function order_save(Request $request)
   {
    //return $request->payment_type;
    if($request->payment_type == 'Cash')
    {
      $order = new Order();
      $order->customer_id =Session::get('customer_id');
      $order->shipping_id =Session::get('shipping_id');
      $order->customer_name = Session::get('customer_name');
      $order->product_name = Session::get('product_name');
      $order->total_quantity = Session::get('total_quantity');
      $order->total_price =Session::get('total_price');  
      $order->payment_type=$request->payment_type;  
      $order->save();

       
      $cartContents = Cart::getContent();
      foreach ($cartContents as $cartContent)
      {
      $order_detail = new OrderDetail();
      $order_detail->order_id = $order->id;
      $order_detail->product_id = $cartContent->id;
      $order_detail->customer_id =$order->customer_id;
      $order_detail->customer_name =$order->customer_name;
      $order_detail->product_name = $cartContent->name;
      $order_detail->product_image = $cartContent->attributes->product_image;
      $order_detail->product_price = $cartContent->price;
      $order_detail->product_quantity = $cartContent->quantity;
      $order_detail->save();
      }
      Cart::clear();
      return redirect()->route('order_invoice_pdf', $order->id);
    }
    elseif ($request->payment_type == 'Paypal')
    {
      return 'Ami Paypal';
    }
    elseif ($request->payment_type == 'Bkash')
    {
      return ' Ami Bkash';
    }
   }
   public function order_history()
    
    {
      return view('frontend.checkout.order_history');
    }
    public function customer_order_print(Request $request)
   {
    //return $request->payment_type;
    if($request->payment_type == 'Cash')
    {
      $order = new Order();
      $order->customer_id =Session::get('customer_id');
      $order->shipping_id =Session::get('shipping_id');
      $order->customer_name = Session::get('customer_name');
      $order->product_name = Session::get('product_name');
      $order->total_quantity = Session::get('total_quantity');
      $order->total_price =Session::get('total_price');  
      $order->payment_type=$request->payment_type;  
      $order->save();

       
      $cartContents = Cart::getContent();
      foreach ($cartContents as $cartContent)
      {
      $order_detail = new OrderDetail();
      $order_detail->order_id = $order->id;
      $order_detail->product_id = $cartContent->id;
      $order_detail->customer_id =$order->customer_id;
      $order_detail->customer_name =$order->customer_name;
      $order_detail->product_name = $cartContent->name;
      $order_detail->product_image = $cartContent->attributes->product_image;
      $order_detail->product_price = $cartContent->price;
      $order_detail->product_quantity = $cartContent->quantity;
      $order_detail->save();
      }
      //Cart::clear();
      return redirect()->route('order_invoice_pdf', $order->id);
    }
  }
  public function logout_customer()
  {
     session()->forget(['customer_id', 'customer_name', 'shipping_id']);
     return redirect('/');
  }
}
