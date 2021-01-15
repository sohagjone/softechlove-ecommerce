 @extends('admin.dashboard')

 @section('dashboard_body')
@section('title')
 Manage Category
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
  <table class="table table-bordered table-hover">
    <thread>
      <tr>
        <th>S.N</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Created Date</th>
        <th>Publication Status</th>
        <th>Action</th>
      </tr>
    </thread>
    <tbody>
      @foreach($categories->all() as $category)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$category->category_name}}</td>
        <td>{{$category->category_description}}</td>
        <td>{{$category->created_at}}</td>
        <td align="center">{{$category->publication_status ==1 ? 'Published':'Unpublished'}}
        </td>
        <td>
        <div class="btn-group" role="group" aria-label="Button group">
        @if($category->publication_status==1)
        <a href="{{route('category_unpublish',['id' => $category->id])}}" class="btn btn-outline-info">Unpublished</a>
        @else
        <a href="{{route('category_publish',['id' => $category->id])}}" class="btn btn-outline-primary">Published</a>
        @endif
         
         <a href="{{route('edit_category',['id'=>$category->id])}}" class="btn btn-outline-warning">Edit</a>
         <a href="{{route('category_delete',['id' => $category->id])}}" class="btn btn-outline-danger">Delete</a>
        </div>
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
  <div class="col-12 text-center">
    {{$categories->links()}}
     </div>
 @endsection