 @extends('admin.dashboard')
 @section('dashboard_body')
 @section('title')
 Edit Category
 @endsection
 @if(Session::has('category_update_msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('category_update_msg')}}</strong> 
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
 <form action="{{route('category_update')}}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="category_name" 
      value="{{$category->category_name}}">
      <input type="hidden" name="category_id" value="{{$category->id}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Category Descripton</label>
    <div class="col-sm-6">
     <textarea id="category_description" class="form-control" name="category_description" rows="3">{{$category->category_description}}</textarea>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" 
         {{$category->publication_status == 1 ? 'checked':''}}  value="1" >
          <label class="form-check-label" for="publication_status">
            Published
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status"  {{$category->publication_status == 0 ? 'checked':''}} value="0"  >
          <label class="form-check-label" for="gridRadios2">
            Unpublished
          </label>
        </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-6">
      <center><button type="submit" class="btn btn-primary">Update Category</button></center>
    </div>
  </div>
</form>
 @endsection