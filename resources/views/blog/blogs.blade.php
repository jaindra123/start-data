@extends('blog.master')
@section('title','Post List')
@section('body')
    <div class="container">
        <div class="row" >
            @if(Session::has('blog_deleted'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{Session::get('blog_deleted')}}
                </div>
            @endif
            <!-- <div> 
                <form> 
                    <div class="form-group">
                        <input class="typeahead form-control" type="text">
                    </div>
                </form>
            </div> -->
            <input type="text" id='blog_search'>
            <input type="text" id='blogid' readonly>
           
            <table class="table table-bordered" id="resultData">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead> 
                <tbody>
                    @if(isset($blogs) && $blogs != null)
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->description}}</td>
                            <td> <img src="{{url('/public/upload',$blog->image)}}" id="indeximg" class="rounded-circle"> </td>
                            <td>
                                <a href="blog/{{$blog->id}}" class="btn btn-success"> View </a>
                                <a href="edit-blog/{{$blog->id}}" class="btn btn-success"> Edit </a>
                                <a href="delete-blog/{{$blog->id}}" class="btn btn-danger"> Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
         </div>
    </div>
    <style type="text/css">
        #indeximg{
            height:80px;
            width:80px;
        }
    </style>

    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">

    <script type="text/javascript">
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#blog_search" ).autocomplete({
                source: function( request, response ) {
                  $.ajax({
                    url:"{{route('blog.search')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                       _token: CSRF_TOKEN,
                       search: request.term
                    },
                    success: function( data ) {
                       response( data );
                    }
                  });
                },
                select: function (event, ui) {
                   $('#blog_search').val(ui.item.label); 
                   $('#blogid').val(ui.item.value); 
                   return false;
                }
            });
        });
    </script> 

@endsection