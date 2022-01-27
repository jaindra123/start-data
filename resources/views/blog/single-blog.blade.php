@extends('blog.master')

@section('title','Add New Redord')

@section('body')

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Post Title</label>
              <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$blog->title}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Post Description</label>
              <input type="text" name="body" class="form-control" id="inputPassword4" value="{{$blog->description}}">
            </div>
          </div>
        </form>
    </diV>

@endsection