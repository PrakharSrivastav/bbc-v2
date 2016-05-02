<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <!--Import style sheets-->
        <link type="text/css" rel="stylesheet" href="{{url('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type='text/css' rel="stylesheet" href="{{url('css/main.css')}}" media="screen,projection"/>
        @yield('css')

        <!--Import Fonts-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @yield('fonts')

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        @section('content')
        @show
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>
        @yield('javascript')
    </body>
</html>