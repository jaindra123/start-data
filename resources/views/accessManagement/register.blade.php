@extends('layouts.main')

@if(isset($id))
    @section('title','Edit Access User')
@else
    @section('title','Registration')
@endif

@section('content')
{{--
<div class="wrapper">
    <div class="login-wrapper">
        <img src="{{asset('assets/img/colosseum_in_rome-april_2007-1-_copie_2b.jpg')}}" class="bg-colgum"> 
        <div class="content quereszzz">--}}
            <div class="content quereszzz">
                <div class="row">
                    @if(Session::has('msg'))
                        <div class="alert alert-success">
                            <h6>{{Session::get('msg')}}</h6>
                        </div>
                    @endif
                    <form class="login100-form validate-form flex-sb flex-w" action="@if(isset($id)){{route('edit.registration',['id'=>$id])}}@else{{route('register.user')}}@endif" method="POST">
                        @csrf
                        <h1>{{$type}}</h1>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" value="@if(isset($user)){{old('name',$user->name)}}@else{{old('name')}}@endif" placeholder="Name" id="name" class="input-field hrftyu" name="name" autofocus>
                            <div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                            <input type="text" value="@if(isset($user)){{old('email',$user->email)}}@else{{old('email')}}@endif" placeholder="Email" id="email_address" class="input-field hrftyu" name="email" autofocus>
                            <div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" value="" placeholder="Password" id="password" class="input-field hrftyu" name="password">
                            <div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" value="" placeholder="Confirm Password" id="password_confirm" class="input-field hrftyu" name="password_confirm">
                            <div>
                                @if ($errors->has('password_confirm'))
                                    <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="input-container">
                            <select class="input-field" name="language" id="language" style="width:94%">
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
                            <div>
                                @if ($errors->has('language'))
                                    <span class="text-danger">{{ $errors->first('language') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="input-container">
                            <select class="input-field" name="customer" id="customer" style="width:94%">
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
                            <div>
                                @if ($errors->has('customer'))
                                    <span class="text-danger">{{ $errors->first('customer') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                {{ $button }}
                            </button>{{--
                            @if(!isset($id))
                                <div class="vvff"></div>
                                <a href="{{route('login')}}" class="login100-form-btn2" style="text-decoration:none">
                                    login
                                </a>
                            @endif --}}
                        </div>
                    </form>
                </div>
            </div>{{--
        </div>
    </div> --}}
</div>
@endsection