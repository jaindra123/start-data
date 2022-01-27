
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
