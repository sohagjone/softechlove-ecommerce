 @extends('admin.dashboard')

 @section('dashboard_body')
@section('title')
 Manage Product
 @endsection
  
 @if(Session::has('unpublish_status_message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('unpublish_status_message')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif
 @if(Session::has('publish_status_message'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('publish_status_message')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif
 @if(Session::has('delete_message'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('delete_message')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif
  <table class="table table-bordered table-hover table-responsive">
    <thread>
      <tr>
        <th>S.N</th>
        <th>Product Name</th>
        <th>Cat ID</th>
        <th>Product Short Description</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Date</th>
        <th>Publication Status</th>
        <th>Action</th>
      </tr>
    </thread>
    <tbody>
      @foreach($products->all() as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$product->product_name}}</td>
    <td>{{$product->relationToCategory->category_name}}</td>
        <td>{{$product->product_short_description}}</td>
        <td>{{$product->product_price}}</td>
         <td><img src="{{ asset("uploads/$product->product_image")}}" width="100" height="100"></td>
       <td>{{$product->created_at? $product->created_at->diffForHumans():'No Date'}}</td>
      {{--<td>{{$product->created_at->format('D-M-yy h:i:s A')}}</td>--}}
      <td>{{$product->publication_status == 1 ? 'Published' : 'Unpublished'}} 
      </td>

        <td align="center">{{$product->publication_status ==1 ? 'Published':'Unpublished'}}
        </td>
        <td>
        <div class="btn-group" role="group" aria-label="Button group">
        @if($product->publication_status==1)
        <a href="{{route('product_unpublish',['id' => $product->id])}}" class="btn btn-outline-info">Unpublished</a>
        @else
        <a href="{{route('product_publish',['id' => $product->id])}}" class="btn btn-outline-primary">Published</a>
        @endif
         
         <a href="{{route('edit_product',['id'=>$product->id])}}" class="btn btn-outline-warning">Edit</a>
         <a href="{{route('product_delete',['id' => $product->id])}}" class="btn btn-outline-danger">Delete</a>
        </div>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
  <div class="col-12 text-center">
    {{$products->links()}}
    </div>
 @endsection