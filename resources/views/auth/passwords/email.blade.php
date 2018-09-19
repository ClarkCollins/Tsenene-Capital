<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tsenene</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
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
            
        </style>
    </head>
    <body style="padding: 120px 0; background-color: #F2F4F5">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="border" class="panel panel-default">
                <div class="panel-body"><h4><b>Reset Password</b></h4><hr>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="subBtn" type="submit" class="btn btn-primary">
                                    Send Reset Link
                                </button>
                            </div>
                        </div>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>





















