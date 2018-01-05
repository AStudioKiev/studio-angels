<!DOCTYPE html>
<html lang="ru">
<head>
    @yield('head-begin')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Studio Angels</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">

    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/favicon.png"/>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('head-end')
</head>

<body>
    @yield('body')
</body>

@yield('js-section')

</html>