 @extends('admin.dashboard')

 @section('dashboard_body')
@section('title')
 Manage Resotred Product
 @endsection
 
 @if(Session::has('product_restore_msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('product_restore_msg')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif

  @if(Session::has('product_force_delete_msg'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('product_force_delete_msg')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif

 <h1>Deleted Products</h1>
  <table class="table table-bordered table-hover table-responsive">
    <thread>
      <tr>
        <th>S.N</th>
        <th>Product Name</th>
        <th>Cat ID</th>
        <th>Product Short Description</th>
        <th>Product Price</th>
        <th>Product image</th>
        <th>Action</th>
      </tr>
    </thread>
    <tbody>
      @foreach($softDeleteProducts->all() as $softDeleteProduct)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$softDeleteProduct->product_name}}</td>
        <td>{{$softDeleteProduct->category_id}}</td>
        <td>{{$softDeleteProduct->product_short_description}}</td>
        <td>{{$softDeleteProduct->product_price}}</td>
    <td><img src="{{ asset("uploads/$softDeleteProduct->product_image") }}" width="100" height="100"></td>
        <td>{{$softDeleteProduct->deleted_at}}</td>
        
        <td>
        <div class="btn-group" role="group" aria-label="Button group">        
         <a href="{{route('restore_product',['id'=>$softDeleteProduct->id])}}" class="btn btn-outline-warning">Restore</a>
         <a href="{{route('force_delete_product',['id' => $softDeleteProduct->id])}}" class="btn btn-outline-danger">Force Delete</a>
        </div>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
  <div class="col-12 text-center">
    {{$softDeleteProducts->links()}}
    </div>
 @endsection