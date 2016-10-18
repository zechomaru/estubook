<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin -- Estubook --</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('/css/admin/all.css')}}">

    <script src="{{ url('/js/admin/all.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table-middle td{
            vertical-align: middle !important;
        }
        .actions a{
            display: inline-block;
        }
        .actions a i{
           font-size: 18px;
           padding: 10px;
           transition: all .5s;
           cursor: pointer;
        }
        .actions a:hover i{
            transform: scale(1.5);
        }
        .actions form{
            display: inline-block;
        }
    </style>
    <link rel="stylesheet" href="{{ url('/css/loading.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span class="logo-mini"><b>A</b>dmin</span>
                <span class="logo-lg"><b>Admin</b></span>
            </a>
            @include('layouts.partials.admin.header-nav')
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/img/default.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> nombre</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                @include('layouts.partials.admin.sidebar-nav')
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            @yield('header-title')
            @yield('bread-crumb')

        </section>

        <section class="content">

            @if (session('status') === 1)
                <div id="alerts" class="callout callout-success ">
                    <h5>{{ session('message') }}</h5>
                </div>
            @endif
              @if(session('status') === 0)
                <div id="alerts" class="callout callout-danger ">
                    <h5>{{ session('message') }}</h5>
                </div>
            @endif
            

            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2016 <a    href="#"
                                            target="_blank"
                                            title="Mage2 Official Website">Estubook</a>.
        </strong> All rights reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>


                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>


            </div>
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>

                </form>
            </div>

        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
<script>
    $("#alerts").fadeTo(2000, 500).slideUp(500, function(){
        $("#alerts").slideUp(500);
    });
</script>


</body>
</html>
