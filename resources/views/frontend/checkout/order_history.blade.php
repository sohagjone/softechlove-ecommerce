@extends('layouts.frontend_master')
@section('title')
Order History
@endsection
@section('content')

  <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header  mb-3 text-center text-primary">
            <strong style="color:red;">{{Session::get('customer_name')}}</strong> Order History
                    </div>
                </div>
    
                 <table class="table table-dark table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                        @if(Session::get('total_quantity'))
                                                         <th>Your Last Product</th>
                                                         @endif
                                                          
                                                          <th><center>Total Quantiy</center></th>
                                                        <th><center>Total Price price</center></th>
                                                          <th><center>Payment Method</center></th>
                                                        </tr>

                                                    </thead>
                                                      <tr>
                                                        @if(Session::get('total_quantity'))
                                                         <th>{{Session::get('product_name')}}</th>
                                                           @endif
                                                          <th><center>{{Session::get('total_quantity')}}</center></th>
                                                             <th><center>${{Session::get('total_price')}}</center></th>
                                                          @if(Session::get('total_quantity'))
                                                         <th><center><strong style="color:red;">Cash</th>
                                                          @else
                                                          <th><center><strong style="color:red;">Not Available</th>
                                                        </center>
                                                           @endif
                                                      </tr>   
                                                         
                                          </table>
                    <form action="{{route('customer_order_print')}}" method="POST">
                  @csrf
                   <table class="table table-bordered table-hover">
                           <td>
                                 <div class="form-check">
                                    <input class="form-check-input" name="payment_type" checked type="hidden" value="Cash" id="forCash">
                                    
                                </div>
                            </td>
                       </tr>
                      
                       <tr>
                           <td><input class="btn btn-success" type="submit" name="btn" value="Your Order Details Print"/></td>
                       </td>
                   </table>
               </form>
            </div>
        </div>
    </div>
@endsection