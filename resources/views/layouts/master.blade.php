<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - ISM Official Web</title>

    @section('styles')
        <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/plugins/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/sb-admin-2.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/font-awesome-4.1.0/css/font-awesome.min.css') }}">
    @show
</head>
<body>
    <div class="wrapper"><!-- /.wrapper -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0"><!-- /.navbar-static-top -->
            <div class="navbar-header"><!-- /.navbar-header -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">ISM Official Web Admin</a>
            </div><!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"><!-- /.navbar-top-links -->
                <li class="dropdown"><!-- /.dropdown -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user"> <!-- /.dropdown-user -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('Admin.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul><!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
            </ul><!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation"><!-- /.navbar-sidebar -->
                <div class="sidebar-nav navbar-collapse"><!-- /.sidebar-collapse -->
                    <ul class="nav" id="side-menu"><!-- /#side-menu -->
                        <li><!-- /.Dashboard -->
                            <a href="{{ route('Admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li><!-- /.Dashboard -->
                        <li><!-- /.Dashboard -->
                            <a href="{{ route('Admin.abouts.index') }}"><i class="fa fa-info fa-fw"></i> Abouts</a>
                        </li><!-- /.Dashboard -->
                        <li><!-- /.Multi-Level Dropdown -->
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Service<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"><!-- /.nav-second-level -->
                                <li>
                                    <a href="{{ route('Admin.centers.index') }}">Centers</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level"><!-- /.nav-third-level -->
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul><!-- /.nav-third-level -->
                                </li>
                            </ul><!-- /.nav-second-level -->
                        </li><!-- /.Multi-Level Dropdown -->
                        <li><!-- sample page -->
                            <a href="{{ route('Admin.news.index') }}"><i class="fa fa-file-text-o fa-fw"></i> News</a>
                        </li><!-- sample page -->
                        <li><!-- 商品管理  -->
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> 商品管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"><!-- /.nav-second-level -->
                                <li>
                                    <a href="#">目錄管理</a>
                                </li>
                                <li>
                                    <a href="#">商品列表</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level"><!-- /.nav-third-level -->
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul><!-- /.nav-third-level -->
                                </li>
                            </ul><!-- /.nav-second-level -->
                        </li><!-- 商品管理  -->
                    </ul><!-- /#side-menu -->
                </div><!-- /.sidebar-collapse -->
            </div><!-- /.navbar-sidebar -->
        </nav><!-- /.navbar-static-top -->

        <!-- 內頁 -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
        <!-- /.內頁 -->
    </div><!-- /.wrapper -->

    @section('scripts')
        <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/plugins/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('/assets/js/jquery-ui.min.js') }}"></script>
    @show
</body>
</html>
