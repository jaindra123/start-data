
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Customer Login</h3>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                <h3>{{Session::get('message')['auth']}} <br> {{Session::get('message')['un']}}</h3>
                            </div>
                        @endif
                        @if(Session::has('msg'))
                            <div class="alert alert-success">
                                <h3>{{Session::get('msg')}}</h3>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login.customer') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" placeholder="Customer Email" id="customer_email" class="form-control" name="customer_email" required autofocus>
                                @if ($errors->has('customer_email'))
                                    <span class="text-danger">{{ $errors->first('customer_email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" placeholder="customer_password" id="customer_password" class="form-control" name="customer_password" required>
                                @if ($errors->has('customer_password'))
                                    <span class="text-danger">{{ $errors->first('customer_password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Keep me logged in
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
