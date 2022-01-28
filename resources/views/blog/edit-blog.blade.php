@extends('blog.master')

@section('title','Add New Redord')

@section('body')

    <div class="container">
       @if(Session::has('blog_updated'))
            <div class="alert alert-success alert-dismissible fade show">
                {{Session::get('blog_updated')}}
            </div>
        @endif
     
      <form action="{{route('blog.update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$blog->id}}" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Post Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{$blog->title}}" >
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Post Description</label>
            <input type="text" name="description" class="form-control" id="" value="{{$blog->description}}">
          </div>
        </div>
         <div class="form-group col-md-6">
              <label for="inputPassword4">Image</label>
              <input type="file" name="image" class="form-control" >
            </div>
            <div class="form-group col-md-6">
              <input type="hidden" name="my_image" value="{{$blog->image}}" >
            </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
  </diV>

  <div class="col-md-3 bg-dark">
      <div class="d-flex justify-content-center">
        <img src="{{url('/public/upload',$blog->image)}}" id="indeximg" class="rounded-circle">
      </div>
  </div>

  <style type="text/css">
    #indeximg{
      height:150px;
      width:150px;
    }
  </style>

@endsection