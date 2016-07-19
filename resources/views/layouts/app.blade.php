<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="js/revolution-slider/css/settings.css">
    
    <!--Notification-->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-notify/notify.css">


</head>
<body id="app-layout">
    <div id="wrapper" style="position:relative;">
        @include('includes._navbar')
        @yield('content')
        @include('includes._footer')
    </div>
    <!-- JavaScripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Revolution Slider  -->
    <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
    <!--Bootstrap Notify-->
    <script type="text/javascript" src="assets/plugins/bootstrap-notify/notify.js"></script>


    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    </script>
</body>
</html>
