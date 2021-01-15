<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;

class CustomerController extends Controller
{
    public function login_customer(Request $request)
    {
    	$request->validate([
            'email_address'=>'required',
            'password'=>'required'
        ]);
       if($customer = Customer::where('email_address', $request->email_address)->first())
       {
       	 if(password_verify($request->password, $customer->password))
       	 {
       	 	 Session::put(['customer_id'=>$customer->id]);
       		 Session::put(['customer_name'=> $customer->first_name.' '.$customer->last_name]);
       		 return redirect()->route('shipping_form');
       	 }
       	 else
       	 {
       	 	return back()->with('worng_message','Please give the Correct PASSWORD');
       	 }
       }
       else
       { 	
		return back()->with('worng_message','Please give the Correct Email Address');
       }
    }
}
