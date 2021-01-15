<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use App\Shipping;
use App\OrderDetail;
use PDF;

class OrderController extends Controller
{
   public function order_manage()
   {
   	$orders = Order::all();
   	return view('admin.order.order_manage', compact('orders'));
   }
   public function order_details($order_id)
   {
   	$order = Order::find($order_id);
    $customer = Customer::find($order->customer_id);
    $shipping = Shipping::find($order->shipping_id);
    $order_details = OrderDetail::where('order_id', $order_id)->get();
   	return view('admin.order.order_detail', compact('order', 'customer', 'shipping', 'order_details'));
   }
   public function order_invoice($order_id)
   {
    $order = Order::find($order_id);
    $customer = Customer::find($order->customer_id);
    $shipping = Shipping::find($order->shipping_id);
    $order_details = OrderDetail::where('order_id', $order_id)->get();
    return view('admin.order.order_invoice', compact('order', 'customer', 'shipping', 'order_details'));
   }
   public function order_invoice_pdf($order_id)
   {
      $order = Order::find($order_id);
      $customer = Customer::find($order->customer_id);
      $shipping = Shipping::find($order->shipping_id);
      $order_details = OrderDetail::where('order_id', $order_id)->get();
      $pdf = PDF::loadView('admin.order.order_invoice_pdf', compact('order', 'customer', 'shipping', 'order_details'));
      return $pdf->download($customer->first_name.' '.$customer->last_name.' '.$order->id.'.pdf');
   }

}
