@extends('layouts.login')

@section('title','Registration')

@section('register')
<div class="wrapper">
    <div class="login-wrapper">
        <img src="{{asset('assets/img/colosseum_in_rome-april_2007-1-_copie_2b.jpg')}}" class="bg-colgum">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    @if(Session::has('user'))
                        <div class="alert alert-success">
                            <h6>{{Session::get('user')}}</h6>
                        </div>
                    @endif
                    <form class="login100-form validate-form flex-sb flex-w" action="@if(isset($id)){{route('edit.registration',['id'=>$id])}}@else{{route('register.user')}}@endif" method="POST">
                        @csrf
                        <span class="login100-form-title pb-5 ">
                            <img src="{{asset('assets/img/new-logo.svg')}}">
                        </span>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" value="@if(isset($user)){{old('name',$user->name)}}@else{{old('name')}}@endif" placeholder="Name" id="name" class="input-field hrftyu" name="name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" value="@if(isset($user)){{old('username',$user->username)}}@else{{old('username')}}@endif" placeholder="UserName" id="username" class="input-field hrftyu" name="username" required autofocus>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                            <input type="text" value="@if(isset($user)){{old('email',$user->email)}}@else{{old('email')}}@endif" placeholder="Email" id="email_address" class="input-field hrftyu" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" value="" placeholder="Password" id="password" class="input-field hrftyu" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" value="" placeholder="Confirm Password" id="password_confirm" class="input-field hrftyu" name="password_confirm" required>
                            @if ($errors->has('password_confirm'))
                                <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <select class="input-field" name="language" id="language" style="width:98%">
                                <option value="">--Select Language--</option>
                                @foreach ( $languages as $language)
                                    @if(isset($id)) 
                                        @if($user->language_id == $language->id)
                                            <option value="{{$language->id}}" selected>{{$language->language}}</option>
                                        @else
                                            <option value="{{$language->id}}">{{$language->language}}</option>
                                        @endif
                                    @else
                                        @if(old('language') == $language->id)
                                            <option value="{{$language->id}}" selected>{{$language->language}}</option>
                                        @else
                                            <option value="{{$language->id}}">{{$language->language}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('language'))
                                <span class="text-danger">{{ $errors->first('language') }}</span>
                            @endif
                        </div>

                        <div class="input-container">
                            <select class="input-field" name="customer" id="customer" style="width:98%">
                                <option value="">--Select Customer--</option>
                                @foreach ( $customers as $customer)
                                    @if(isset($id))
                                        @if($user->customer_id == $customer->id)
                                            <option value="{{$customer->id}}" selected>{{$customer->customer_name}}</option>
                                        @else
                                            <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                        @endif
                                    @else
                                        @if(old('customer') == $customer->id)
                                            <option value="{{$customer->id}}" selected>{{$customer->customer_name}}</option>
                                        @else
                                            <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('customer'))
                                <span class="text-danger">{{ $errors->first('customer') }}</span>
                            @endif
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ $button }}
                            </button>
                            @if(!isset($id))
                                <div class="vvff"></div>
                                <a href="{{route('login')}}" class="login100-form-btn2" style="text-decoration:none">
                                    login
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<?php
/*
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">{{ $type }}</h3>
                    <div class="card-body">
                        @php
                            //echo '<pre>';
                            //print_r($data);
                            //die;
                        @endphp
                        @if(Session::has('user'))
                            <div class="alert alert-success">
                                <h3>{{Session::get('user')}}</h3>
                            </div>
                        @endif
                        
                        <form action="@if(isset($id)){{route('edit.registration',['id'=>$id])}}@else{{route('register.user')}}@endif" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" value="@if(isset($user)){{old('name',$user->name)}}@else{{old('name')}}@endif" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>UserName</label>
                                <input type="text" value="@if(isset($user)){{old('username',$user->username)}}@else{{old('username')}}@endif" placeholder="UserName" id="username" class="form-control" name="username" required autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" value="@if(isset($user)){{old('email',$user->email)}}@else{{old('email')}}@endif" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" value="" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" value="" placeholder="Confirm Password" id="password_confirm" class="form-control" name="password_confirm" required>
                                @if ($errors->has('password_confirm'))
                                    <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Language</label>
                                <select name="language" id="language">
                                    <option value="">--Select Language--</option>
                                    @foreach ( $languages as $language)
                                        @if(isset($id)) 
                                            @if($user->language_id == $language->id)
                                                <option value="{{$language->id}}" selected>{{$language->language}}</option>
                                            @else
                                                <option value="{{$language->id}}">{{$language->language}}</option>
                                            @endif
                                        @else
                                            @if(old('language') == $language->id)
                                                <option value="{{$language->id}}" selected>{{$language->language}}</option>
                                            @else
                                                <option value="{{$language->id}}">{{$language->language}}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('language'))
                                    <span class="text-danger">{{ $errors->first('language') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Customer</label>
                                <select name="customer" id="customer">
                                    <option value="">--Select Customer--</option>
                                    @foreach ( $customers as $customer)
                                        @if(isset($id))
                                            @if($user->customer_id == $customer->id)
                                                <option value="{{$customer->id}}" selected>{{$customer->customer_name}}</option>
                                            @else
                                                <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                            @endif
                                        @else
                                            @if(old('customer') == $customer->id)
                                                <option value="{{$customer->id}}" selected>{{$customer->customer_name}}</option>
                                            @else
                                                <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('customer'))
                                    <span class="text-danger">{{ $errors->first('customer') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">{{ $button }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

*/
?>
