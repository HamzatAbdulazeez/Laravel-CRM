<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title> {{config('app.name')}} - Admin CRM Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A modern CRM Dashboard NOLT Finance" name="A modern CRM Dashboard NOLT Finance" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://firstpavilion.sfo3.cdn.digitaloceanspaces.com/CrmFinance/NOLT-horizontal-logo-RGB-L%20(1).png" />
    <!-- Daterangepicker CSS -->
    <link href="{{URL::asset('dash/assets/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <!-- Data Table CSS -->
    <link href="{{URL::asset('dash/assets/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('dash/assets/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Perfect Scrollbar CSS -->
    <link href="{{URL::asset('dist/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="{{URL::asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <!-- Header -->
        @includeIf('layouts.dashboard-header')
        <!-- Header Ends -->

        <!-- Sidebar -->
        @includeIf('layouts.dashboard-sidebar')
        <!-- Sidebar Ends -->

        <!-- Page-Content -->
        @yield('page-content')
        <!-- Page-Content Ends -->

        <!-- Sidebar -->
        @includeIf('layouts.dashboard-footer')
        <!-- Sidebar Ends -->
    </div>
    <!-- END layout-wrapper -->
    <!-- jQuery -->
    <script src="{{URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{URL::asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{URL::asset('dist/js/feather.min.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{URL::asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Simplebar JS -->
    <script src="{{URL::asset('vendors/simplebar/dist/simplebar.min.js')}}"></script>

    <!-- Data Table JS -->
    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <!-- Daterangepicker JS -->
    <script src="{{URL::asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('dist/js/daterangepicker-data.js')}}"></script>

    <!-- Amcharts Maps JS -->
    <script src="{{URL::asset('vendors/%40amcharts/amcharts4/core.js')}}"></script>
    <script src="{{URL::asset('vendors/%40amcharts/amcharts4/maps.js')}}"></script>
    <script src="{{URL::asset('vendors/%40amcharts/amcharts4-geodata/worldLow.js')}}"></script>
    <script src="{{URL::asset('vendors/%40amcharts/amcharts4-geodata/worldHigh.js')}}"></script>
    <script src="{{URL::asset('vendors/%40amcharts/amcharts4/themes/animated.js')}}"></script>

    <!-- Apex JS -->
    <script src="{{URL::asset('vendors/apexcharts/dist/apexcharts.min.js')}}"></script>

    <!-- Init JS -->
    <script src="{{URL::asset('dist/js/init.js')}}"></script>
    <script src="{{URL::asset('dist/js/chips-init.js')}}"></script>
    <script src="{{URL::asset('dist/js/dashboard-data.js')}}"></script>


    <!-- Dragula JS -->
    <script src="{{URL::asset('vendors/dragula/dist/dragula.min.js')}}"></script>
    <!-- Bootstrap Colorpicker JS -->
    <script src="{{URL::asset('vendors/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/color-picker-data.js')}}"></script>

    <!-- Dropify JS -->
    <script src="{{URL::asset('vendors/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/dropify-data.js')}}"></script>

    <!-- Dragula CSS -->
    <link href="{{URL::asset('vendors/dragula/dist/dragula.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Dropify CSS -->
    <link href="{{URL::asset('vendors/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- PS scroll JS -->
    <script src="{{URL::asset('dist/js/perfect-scrollbar.min.js')}}"></script>
</body>

</html>
