@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @include('layouts.inc.messages')
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <div style="margin: auto;padding-bottom: 30px;padding-top: 30px" class="col-md-offset-1 col-md-10">
                        <a href="/dashboard" class="btn btn-default pull-right">Back</a>
                        <br><br>
                            <div class="tabbable-line">
                                <!--                                            if statement to load password tab is there is an error-->
                                @if ($errors->has('password'))
                                <ul class="nav nav-tabs ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_default_1" data-toggle="tab">Personal Info </a>
                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab_default_2" data-toggle="tab">Reset Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab_default_1">
                                        <br>
                                        <img src="{{ asset('storage/document_uploads/profile_photos/') }}/<?php echo Auth::user()->photo_path; ?>" alt="user photo" style="display:block;width:150px;height:150px;outline: #4CAF50 solid 2px;outline-style:dotted;">
                                        @if(Auth::user()->photo_path == "default.png")
                                        @else
                                        &nbsp;&nbsp;&nbsp;<a href="/delete_photo"><i class="fa fa-times"></i> remove photo</a>
                                        @endif
                                        <form action="/profile_update" enctype="multipart/form-data"  method="post">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                                                            <br> <label>Name</label>
                                                            <input id="name" name="name"  type="text" value="<?php echo ucwords(Auth::user()->name); ?>" class="form-control" autofocus>
                                                            @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                                            <br> <label>Email</label>
                                                            <input id="email" name="email"  type="email" value="<?php echo ucfirst(Auth::user()->email); ?>" class="form-control" autofocus>
                                                            @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row  col-lg-offset-1 col-md-offset-3 col-xs-5">

                                                    <div class="full-width">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<label>Photo:</label><input class="col-md-10" accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*"id="photo" name="photo" type="file" class="form-control" autofocus>
                                                        <input hidden name="photo1" value="<?php echo Auth::user()->photo_path; ?>" type="text">
                                                        @if ($errors->has('photo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('photo') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div><br>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions">
                                                <button id="create_btn2" type="submit" class="btn btn-success"> Save</button>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="tab-pane active" id="tab_default_2">
                                        <!--                                                    <div class="well well-sm">
                                                                                                <h4>EDUCATIONAL BACKGROUND</h4>
                                                                                            </div>-->
                                        <!--/row-->
                                        <form action="/update_password" enctype="multipart/form-data"  method="post">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                                            <br> <label>Password</label>
                                                            <input required id="password" name="password"  type="password" value="" class="form-control" autofocus>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                                            <br> <label>Confirm Password</label>
                                                            <input required id="confirm_password" name="password_confirmation"  type="password" value="" class="form-control" autofocus>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button id="create_btn2" type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                        <!--/row-->
                                    </div>

                                </div>
                                <!--                                            end of if statement to load password tab if there is an error-->


                                @else
                                <ul class="nav nav-tabs ">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab_default_1" data-toggle="tab">Personal Info </a>
                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_default_2" data-toggle="tab">Reset Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <br>
                                        <img src="{{ asset('storage/document_uploads/profile_photos/') }}/<?php echo Auth::user()->photo_path; ?>" alt="user photo" style="display:block;width:150px;height:150px;outline: #4CAF50 solid 2px;outline-style:dotted;">
                                        @if(Auth::user()->photo_path == "default.png")
                                        @else
                                        &nbsp;&nbsp;&nbsp;<a href="/delete_photo/<?php echo Auth::user()->photo_path; ?>"><i class="fa fa-times"></i> remove photo</a>
                                        @endif
                                        <form action="/profile_update" enctype="multipart/form-data"  method="post">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                                                            <br> <label>Name</label>
                                                            <input id="name" name="name"  type="text" value="<?php echo Auth::user()->name; ?>" class="form-control" autofocus>
                                                            @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                                            <br> <label>Email</label>
                                                            <input id="email" name="email"  type="email" value="<?php echo ucfirst(Auth::user()->email); ?>" class="form-control" autofocus>
                                                            @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->

                                                <div class="row  col-lg-offset-1 col-md-offset-3 col-xs-5">

                                                    <div class="full-width">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<label>Photo:</label><input class="col-md-10" accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*"id="photo" name="photo" type="file" class="form-control" autofocus>
                                                        <input hidden name="photo1" value="<?php
                                                        $photo = Auth::user()->photo_path;
                                                        echo $photo;
                                                        ?>" type="text">
                                                        @if ($errors->has('photo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('photo') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div><br>
                                            </div>
                                            <div class="form-actions">
                                                <button id="create_btn2" type="submit" class="btn btn-success"> Save</button>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="tab-pane" id="tab_default_2">
                                        <!--                                                    <div class="well well-sm">
                                                                                                <h4>EDUCATIONAL BACKGROUND</h4>
                                                                                            </div>-->
                                        <!--/row-->
                                        <form action="/update_password" enctype="multipart/form-data"  method="post">
                                            {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                                            <br> <label>Password</label>
                                                            <input required id="password" name="password"  type="password" value="" class="form-control" autofocus>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                                            <br> <label>Confirm Password</label>
                                                            <input required id="confirm_password" name="password_confirmation"  type="password" value="" class="form-control" autofocus>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button id="create_btn2" type="submit" class="btn btn-success"> Save</button>
                                            </div>
                                        </form>
                                        <!--/row-->
                                    </div>

                                </div>

                                @endif

                            </div><!-- /.col-lg-12 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
    </div>

    @include('layouts.inc.new_footer')
    <!-- ============================================================== -->
</div>
@endsection
