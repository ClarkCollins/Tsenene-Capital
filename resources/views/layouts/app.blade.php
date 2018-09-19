<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link href="images/favicon.ico" rel="icon" sizes="32x32">
        <title>Tsenene Capital</title>
        <!-- Custom CSS -->
        <link href="{{ asset('css/chartist.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css">
        <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.amber-light_blue.min.css">-->
        <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
       hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
#create_btn {
    background-color: #3EC1D5; /* Green */
    border: none;
    color: white;
    padding: 8px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width:200px;
    border-radius: 0 !important;
    margin: auto
}
#text_btn {
    border: none;
    color: #3EC1D5;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    border-radius: 0 !important;
    margin: auto
}
#create_btn2 {
    background-color: #3EC1D5; /* Green */
    border: none;
    color: white;
    padding: 8px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    width:120px;
    border-radius: 0 !important;
    margin: auto;
}
#edit_btn {
    border: none;
    color: #3EC1D5;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 0 !important;
    margin: auto
}
#delete_btn {
    border: none;
    color: red;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 0 !important;
    margin: auto
}
#create_btn:hover,#create_btn2:hover,#text_btn:hover,#edit_btn:hover { 
    color:black;
}
#logout_btn{
    color:#161823
}
#logout_btn:hover{
    color:#4CA170
}
        </style>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <a href="/dashboard" class="logo">
                                <img src="images/logo-tsenene.png" class="light-logo" style="width:230px;height: 60px" alt="homepage">
                            </a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul id="zindex" class="navbar-nav float-left mr-auto">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box">
                                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-magnify font-20 mr-1"></i>
                                        <div class="ml-1 d-none d-sm-block">
                                            <span>Search</span>
                                        </div>
                                    </div>
                                </a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter">
                                    <a class="srh-btn">
                                        <i class="ti-close"></i>
                                    </a>
                                </form>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('storage/document_uploads/profile_photos/') }}/<?php echo Auth::user()->photo_path; ?>" alt="user" class="rounded-circle" width="31">&nbsp;&nbsp;<span style="color:black"><?php echo ucwords(Auth::user()->name); ?></span></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                    <a class="dropdown-item" href="profile"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                    &nbsp;<a id="logout_btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-power-off m-r-5 m-l-5"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                          Logout</a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!--         style="height:1000px;"-->
            <aside class="left-sidebar" data-sidebarbg="skin5" style="height:100%;" >
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar"><hr>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard" aria-expanded="false">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="add_company" aria-expanded="false">
                                    <i class="mdi mdi-arrange-bring-forward"></i>
                                    <span class="hide-menu">Create Company</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/profile" aria-expanded="false">
                                    <i class="mdi mdi-account-network"></i>
                                    <span class="hide-menu">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <!--          footer 
                 ============================================================== 
                <div class="footer text-center"style="padding-top: 15px;">
                    Copyright Tsenene Capital. All Rights Reserved<br>
                    Designed by <a href="https://www.inqb8.co.za/">Inqb8 Business Technologies</a> Partnering with
                    <a href="https://wrappixel.com">Tsenene Capital</a>.
                </div>
                 ============================================================== 
                 End footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('js/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="{{ asset('js/chartist.min.js') }}"></script>
        <script src="{{ asset('js/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('js/dashboard1.js') }}"></script>
        <script src="{{ asset('js/datatables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/datatables-init.js') }}"></script>
        <script>
                                           var height = $('.page-wrapper').height();

                                           $('.left-sidebar').height(height);
        </script>
    </body>

</html>

