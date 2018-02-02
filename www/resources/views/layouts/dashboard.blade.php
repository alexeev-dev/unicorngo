<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UnicornGO</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">
<!-- Begin page -->
       <div id="wrapper">

           <div class="topbar">
               <!-- LOGO -->
               <div class="topbar-left">
                   <div class="text-center">
                       <a href="/" class="logo"><img class="small" src="{{ asset('assets/images/logo.png') }}" alt="logo-img"></a>
                       <a href="/" class="logo-sm"><img class="small" src="{{ asset('assets/images/logo_sm.png') }}" alt="logo-img"></a>
                   </div>
               </div>
               <!-- Button mobile view to collapse sidebar menu -->
               <div class="navbar navbar-default" role="navigation">
                   <div class="container">
                       <div class="">
                           <div class="pull-left">
                               <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                   <i class="ion-navicon"></i>
                               </button>
                               <span class="clearfix"></span>
                           </div>

                         <!--  <form class="navbar-form pull-left" role="search">
                               <div class="form-group">
                                   <input type="text" class="form-control search-bar" placeholder="Search...">
                               </div>
                               <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                           </form> -->

                           <ul class="nav navbar-nav navbar-right pull-right">
                               <!--  <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg noti-list-box">
                                        <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                        <li class="list-group">
                                            <!-- list item--><!--
                                           <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                   <div class="media-heading">Your order is placed</div>
                                                   <p class="m-0">
                                                       <small>Dummy text of the printing and typesetting industry.</small>
                                                   </p>
                                               </div>
                                           </a>
                                           <!-- list item--><!--
                                           <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                   <div class="media-body clearfix">
                                                       <div class="media-heading">New Message received</div>
                                                       <p class="m-0">
                                                           <small>You have 87 unread messages</small>
                                                       </p>
                                                   </div>
                                               </div>
                                           </a>
                                           <!-- list item--><!--
                                           <a href="javascript:void(0);" class="list-group-item">
                                               <div class="media">
                                                   <div class="media-body clearfix">
                                                       <div class="media-heading">Your item is shipped.</div>
                                                       <p class="m-0">
                                                           <small>It is a long established fact that a reader will</small>
                                                       </p>
                                                   </div>
                                               </div>
                                           </a>
                                           <!-- last list item --><!--
                                           <a href="javascript:void(0);" class="list-group-item">
                                               <small class="text-primary">See all notifications</small>
                                           </a>
                                       </li>
                                   </ul>
                               </li>-->
                               <li class="hidden-xs">
                                   <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a>
                               </li>
                               <li class="dropdown">
                                   <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                       <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
                                   </a>
                                   <ul class="dropdown-menu">
                                       <li><a href="{{ route('profile') }}"> Profile</a></li>
                                   <!--  <li><a href="javascript:void(0)"> Lock screen</a></li>-->
                                       <li class="divider"></li>
                                       <li>
                                           <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               Logout
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               {{ csrf_field() }}
                                           </form> </li>
                                   </ul>
                               </li>
                           </ul>
                       </div>
                       <!--/.nav-collapse -->
                   </div>
               </div>
           </div>
           <!-- Top Bar End -->

           <div class="left side-menu">
               <div class="sidebar-inner slimscrollleft">

                   <!--<div class="user-details">-->
                   <!--<div class="pull-left">-->
                   <!--<img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">-->
                   <!--</div>-->
                   <!--<div class="user-info">-->
                   <!--<div class="dropdown">-->
                   <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">David Cooper <span class="caret"></span></a>-->
                   <!--<ul class="dropdown-menu">-->
                   <!--<li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>-->
                   <!--<li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>-->
                   <!--<li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>-->
                   <!--<li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>-->
                   <!--</ul>-->
                   <!--</div>-->

                   <!--<p class="text-muted m-0">Admin</p>-->
                   <!--</div>-->
                   <!--</div>-->
                   <!--- Divider -->


                   <div id="sidebar-menu">
                       <ul>
                           <li class="menu-title">Menu</li>
                           <li>
                               <a href="{{ route('dashboard') }}" class="waves-effect"><i class="mdi mdi-home"></i><span> Home</span></a>
                           </li>
                           <li>
                               <a href="{{ route('referral') }}" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Referal <!-- <span class="badge badge-primary pull-right">12</span> --></span></a>
                           </li>

                           <li>
                               <a href="{{ route('buytokens') }}" class="waves-effect"><i class="mdi mdi-diamond"></i><span> Buy Tokens</span></a>
                           </li>
                       </ul>
                   </div>
                   <div class="clearfix"></div>
               </div> <!-- end sidebarinner -->
           </div>
           <!-- Left Sidebar End -->

        @yield('content')



        </div>

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- Datatables-->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47504860 = new Ya.Metrika2({
                    id:47504860,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47504860" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
