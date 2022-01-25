@extends('layouts.main')

@section('title','Access User List')

@section('content')

    <div class="content quereszzz">
        <div class="row">
            <div class="col-md-9">
                <h1>Access User List</h1>
            </div>
            <div class="col-md-3">
                <a href="{{route('register-user')}}">
                    <button class="btn btn-primary">
                        Add Access User
                    </button>
                </a>
            </div>
        </div>
        @php
            //echo '<pre>';
            //print_r($values);
            //die;
        @endphp
        <div class="row">
            <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    <h3>{{Session::get('message')}}</h3>
                </div>
            @endif
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>S.NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Language</th>
                                    <th>Customer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($values))
                                    @foreach($values as $key => $value)
                                        <tr>
                                            <td>{{$values->firstItem() + $key}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->role}}</td>
                                            <td>{{$value->language[0]['language']}}</td>
                                            <td>{{$value->customer[0]['customer_name']}}</td>
                                            <td class="text-left">
                                                <a href="{{route('edit.registration',['id'=>$value->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | 
                                                {{-- <a data-toggle="modal" data-target="#deleteModal" href="{{route('delete.cutomer',['id'=>$value->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a> | --}}
                                                <a href="{{route('email.send',['id'=>$value->id])}}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">{{'No Record Found'}}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <span>{{$values->links()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<?php
/*
<main class="list-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">List of Access User</h3>
                    <div class="card-body">
                        @php
                        //echo '
                        <pre>';
                            //print_r($values);
                            //die;
                        @endphp
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                <h3>{{Session::get('message')}}</h3>
                            </div>
                        @endif

                        <div class="col-xl-12 col-lg-12">
                            <table border='1' class="table table-bordered" id="content">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Language</th>
                                        <th>Customer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($values))
                                    @foreach($values as $key => $value)
                                        <tr>
                                            <td>{{$values->firstItem() + $key}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->username}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->role}}</td>
                                            <td>{{$value->language[0]['language']}}</td>
                                            <td>{{$value->customer[0]['customer_name']}}</td>
                                            <td>
                                                <a href="{{route('edit.registration',['id'=>$value->id])}}"><button class="btn btn-primary">Edit</button></a> | 
                                                <a data-toggle="modal" id="smallButton" data-target="#smallModal" href="{{route('delete.cutomer',['id'=>$value->id])}}"><button class="btn btn-primary">Delete</button></a> |
                                                <a href="{{route('email.send',['id'=>$value->id])}}"><button class="btn btn-primary">Send Mail</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">{{'No Record Found'}}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <span>{{$values->links()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .w-5{
        display:none;
    }
</style>
*/
?>