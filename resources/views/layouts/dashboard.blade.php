<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Order| @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!--//////////////////////////////////////////////////////////////////////////////////////////-->
    <!--Bootstrap-Calendar-->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-calendar/css/calendar.css">
    <!--END CALENDAR-->
    <!--//////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skins/_all-skins.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.styles.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .dataTables_filter {
        font-size:16px;
        float:right;
    }
    </style>
</head>
<body class="hold-transition skin-purple sidebar-mini fixed">
    <div class="wrapper">
        @include('dashboard.includes.header')
        @include('dashboard.includes.navbar')
        @yield('content')
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script type="text/javascript" src="assets/plugins/bootstrap-calendar/components/jquery/jquery.min.js"></script>
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- DataTables -->
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!--Calendar-->
    <script type="text/javascript" src="assets/plugins/underscore/underscore-min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-calendar/js/calendar.min.js"></script>
   
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="assets/js/pages/dashboard2.js"></script-->
    <!-- AdminLTE for demo purposes -->
    @yield('scripts')
</body>
</html>
