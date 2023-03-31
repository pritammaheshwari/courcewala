<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | Nalika - Material Admin Template</title>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registration</h3>
                    <p>Admin template with very clean and aesthetic style prepared for your next app. </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('registration')}}" id="loginForm" method="POST">
                          @csrf
                            <div class="row">
                                {{-- <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control">
                                </div> --}}

                              <div class="form-group col-lg-8">
                                  <label>Username</label>
                                  <input class="form-control" name="name" value="{{ old('name')}}">
                              </div>
                         
                                <div class="form-group col-lg-8">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email" value="{{ old('email')}}">
                                </div>

                                <div class="form-group col-lg-8">
                                  <label>Password</label>
                                  <input type="password" class="form-control" name="password" value="{{ old('password')}}">
                                </div>
                               
        
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    
    @include('admin.layout.script');
   <style>

.row {
    margin-right: -51px;
    margin-left: 92px;
}
   </style>
</body>

</html>