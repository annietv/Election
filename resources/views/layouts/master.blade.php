<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management- @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- <link rel="stylesheet" href="{{ asset('dashboard/summernote/summernote-bs4.min.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('dashboard/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="((asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="((asset('css/bootstrap.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ asset('dashboard') }}/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App css -->
    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{asset('dashboard/assets/css/style_dark.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('dashboard/assets/js/modernizr.min.js')}}">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
    });
});
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>


<body>
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <!-- <div class="topbar-left">
                    <a href="index.html" class="logo">

                        <span>
                            <img src="dashboard/assets/images/logo.png" alt="" height="22">
                        </span>
                        <i>
                            <img src="dashboard/assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div> -->

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="dashboard/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#"></a> </h5>

                    <p class="text-muted">Akpan Imoh Jimmy</p>

                    <p class="text-muted"></p>

                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->
                        <!-- <span class="badge badge-danger badge-pill pull-right">7</span> -->
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fi-air-play"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>


                        <li>
                            <a href="{{route('pollingUnit')}}">
                                <i class="fi-command"></i> <span> Polling Units</span>
                            </a>
                        </li>








                        <li>
                            <a href="{{route('pollingUnitResult')}}">
                                <i class="fi-command"></i> <span> Polling Unit Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('AddpollingUnit')}}">
                                <i class="fi-command"></i> <span> Add New Polling Unit</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('addParty')}}">
                                <i class="fi-command"></i> <span> Add Result</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="{{route('allParty')}}">
                                <i class="fi-command"></i> <span> All Parties</span>
                            </a>
                        </li> -->






                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="hide-phone app-search">
                            <form>
                                <input type="text" placeholder="Search..." class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon text-secondary"></i>

                                <span class="badge badge-danger badge-pill noti-icon-badge"> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear
                                                    All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i
                                                class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details"><small class="text-muted">1 min
                                                ago</small></p>
                                    </a>






                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="fi-speech-bubble noti-icon text-secondary"></i>

                                <span class="badge badge-custom badge-pill noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear
                                                    All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">


                                    <!-- item-->
                                    <a href="" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg"
                                                class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details"></p>
                                        <p class="text-muted font-13 mb-0 notify-details"></p>
                                    </a>







                                </div>

                                <!-- All-->
                                <a href="#" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="dashboard/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                <span class="ml-1">Imoh Ak<i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title">Menu Collapsed </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Election</a></li>
                                    <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                                    <li class="breadcrumb-item active">Menu Collapsed</li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <footer class="footer text-right">
                Akpan Imoh Jimmy
            </footer>

            <!-- Top Bar End -->
            <!-- jQuery  -->

            <script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/popper.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/metisMenu.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/waves.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/jquery.slimscroll.js')}}">
            </script>
            <script src="{{asset('dashboard/assets/pages/jquery.dashboard.init.js')}}">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/summernote/summernote-bs4.min.js">
            </script>
            <!-- App js 
            
            -->
            <script src="{{ asset('js/chart.js') }}"></script>

            <script src="{{ asset('dashboard') }}/assets/plugins/jquery-knob/jquery.knob.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/responsive-table/css/rwd-table.min.js">
            </script>
            <!-- App js -->
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables/dataTables.select.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables/pdfmake.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables/buttons.bootstrap4.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables/jquery.dataTables.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
            </script>
            <script src="{{ asset('dashboard') }}assets/plugins/jszip/jszip.min.js">
            </script>
            <script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
            <script src="{{ asset('dashboard') }}/assets/plugins/pdfmake/vfs_fonts.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables-buttons/js/buttons.html5.min.js">
            </script>
            <script src="{{ asset('dashboard') }}assets/plugins/datatables-buttons/js/buttons.print.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/datatables-buttons/js/buttons.colVis.min.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/select2/js/select2.js">
            </script>
            <script src="{{ asset('dashboard') }}/assets/plugins/select2/js/select2.min.js">
            </script>
            <script src="{{asset('dashboard/plugins/jquery-knob/jquery.knob.js')}}">
            </script>
            <script src="{{asset('dashboard/assets/js/jquery.core.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/jquery.app.js')}}"></script>
            <script src="{{asset('js/ajax.js')}}"></script>
            @yield('content')
        </div>
</body>


</html>
<script>
$(".js-example-basic-multiple-limit").select2({
    maximumSelectionLength: 2
});
$(function() {
    //Add text editor
    $('#compose-textarea').summernote()
})

$(function() {
    //Add text editor
    $('#compose-textareab').summernote()
})
$(function() {
    //Add text editor
    $('#compose-textareac').summernote()
})
</script>
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>