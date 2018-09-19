<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tsenene Capital</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="images/favicon.ico" rel="icon" sizes="32x32">
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                height: 100px;
                width: 100px;
            }
            .topleft {
                position: absolute;
                height: 110px;
                width: 110px;
                top: 8px;
                left: 16px;
                font-size: 18px;
            }
            body{
                background-image:url(images/signup.jpg);

                /* Center and scale the image nicely */
                background-repeat: no-repeat; 
                background-position: center;
                background-attachment: fixed;       
                webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height:100%;
                width:100%;
            }
            .container{
                margin-top: 100px;
            }
            #subBtn {
                background-color: #3EC1D5; /* Green */
                border: none;
                color: white;
                padding: 8px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 0 !important;
            }
            #border{
                border-radius: 0 !important;
                border:none
            }
            #subBtn:hover { 
                color:black;
            }
            #com_name{
    text-decoration: none;
}
        </style>
    </head>
    <body>
        <div class="text-block topleft"> 
            <a title="return home" id="com_name" href="/"><h1><b><span  style="color:#3EC1D5">Tsenene</span>&nbsp;<span  style="color:#FFFFFF">Capital</span></b></h1></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="border"  class="panel panel-default">
                        <!--                <div class="panel-heading">Register</div>-->

                        <div class="panel-body"><h4><b>Register</b></h4><hr>
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control" name="name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Email Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="TnC" required> Agree the terms and policy
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button id="subBtn" type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <a style="color:#3EC1D5" class="btn btn-link" href="{{ route('login') }}">
                                            Already have an account?
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
        </script>
    </body>
</html>



































