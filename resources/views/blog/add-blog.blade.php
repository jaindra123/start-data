@extends('blog.master')

@section('title','Add New Redord')

@section('body')

    <div class="container">
      @if(Session::has('blog_save'))
        <div class="alert alert-success alert-dismissible fade show">
            {{Session::get('blog_save')}}
        </div>
      @endif
      <form action="{{route('blog.save')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Post Title</label>
            <input type="text" name="title" class="form-control" id="" placeholder="Title" >
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Post Description</label>
            <input type="text" name="description" class="form-control" id="" placeholder="Description">
            @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Image Upload</label>
            <input type="file" name="image" class="form-control" >
            @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </diV>

@endsection