
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
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
                        <form method="POST" action="{{ route('login.user') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label>UserName</label>
                                <input type="text" placeholder="UserName" id="username" class="form-control" name="username" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
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
