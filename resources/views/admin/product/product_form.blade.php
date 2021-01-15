 @extends('admin.dashboard')
 @section('dashboard_body')
  @section('title')
  Add Product
 @endsection
 @if(Session::has('product_add_msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('product_add_msg')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
 @endif
  @if ($errors->any())
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <form action="{{route('product_save')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="product_name" id="product_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="category_id" class="col-sm-2 col-form-label">Category Name</label>
      <div class="col-sm-6">
        <select  class="form-control" name="category_id" id="category_id">
          <option>--Select Category---</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->category_name}}</option> 
          @endforeach
        </select>
        @foreach($errors->get('product_name') as $message)
      <span class="text-danger">Category Name is Required</span>
       @endforeach
      </div>
    </div>
  <div class="form-group row">
    <label for="product_short_description" class="col-sm-2 col-form-label">Product Short Descripton</label>
    <div class="col-sm-6">
     <textarea id="product_short_description" class="form-control" name="product_short_description" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="product_long_description" class="col-sm-2 col-form-label">Product Long Descripton</label>
    <div class="col-sm-7">
     <textarea id="editor" class="textarea" name="product_long_description" rows="3" ></textarea/>
    </div>
  </div>
  <div class="form-group row">
    <label for="product_price" class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="product_price" id="product_price">
    </div>
  </div>
  <div class="form-group row">
    <label for="product_image" class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" name="product_image" id="product_img">
    </div>
  </div>

   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-2">Publication Status</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" id="publication_status" value="1">
          <label class="form-check-label" for="publication_status">
            Published
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" id="publication_status" value="0">
          <label class="form-check-label" for="gridRadios2">
            Unpublished
          </label>
        </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-6">
      <center><button type="submit" class="btn btn-primary">Add Product</button></center>
    </div>
  </div>
</form>
 @endsection