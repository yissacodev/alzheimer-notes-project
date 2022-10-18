<!doctype html>
<html lang="es">

<head>
    <title>Alzheimer Notes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">

    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="64x64">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagina.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slider/bar/bar.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/slider/dark/dark.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/slider/default/default.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/slider/light/light.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/slider/nivo-slider.css" type="text/css" media="screen">
    <link href="css/modal.css" rel="stylesheet">

    <script src="/js/slider/jquery-3.5.1.js"></script>



</head>

<body>
    @include('partials.navbar')
    
    
    <div class="ir-arriba icon-arrow-up2"></div>
    <script type="text/javascript" src="js/goto/goto.js"></script>

    <div class="content">
        @yield('content', 'Alzheimer Notes')
    </div>

    @include('partials.footer')
    
</body>

</html>