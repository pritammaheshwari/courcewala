<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.layout.css');
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO APP</h3>
                    <p>This is the best app ever!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('login')}}" id="loginForm" method="post">
                          @csrf

                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="example@gmail.com"  value="{{ old('email') }}" title="Please enter you username"  value="" name="email" id="email" class="form-control">
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password"  value="{{ old('password') }}" placeholder="******"  value="" name="password" id="password" class="form-control">
                                @error('password')
                                      <div class="error">{{ $message }}</div>
                                  @enderror
                               
                            </div>
                          
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="#">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    @include('admin.layout.script');
<style>
  .error{
    color: red;
  }
</style>
</body>

</html>