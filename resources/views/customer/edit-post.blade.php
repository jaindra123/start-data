@extends('master')

@section('title','Add New Redord')

@section('body')

    <div class="container">
            @if(Session::has('post_updated'))
              <div class="alert alert-success alert-dismissible fade show">
                  {{Session::get('post_updated')}}
              </div>
            @endif

            <form action="{{route('post.update')}}" method="post" enctype="multipart/form-data">
               @csrf
              <input type="hidden" name="id" class="form-control" value="{{$post->id}}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Post Title</label>
                  <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$post->title}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Post Description</label>
                  <input type="text" name="body" class="form-control" id="inputPassword4" value="{{$post->body}}">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </diV>

@endsection