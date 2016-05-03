<!DOCTYPE html>
<html>
    <head>
        <!-- Page title-->
        <title>{{$title}}</title>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import style sheets-->
        <link type="text/css" rel="stylesheet" href="{{url('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type='text/css' rel="stylesheet" href="{{url('css/main.css')}}" media="screen,projection"/>

        <!--Import Fonts-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- stylesheets from any additional child pages can come here-->
        @yield('css')

        <!-- fonts from any additional child pages can come here-->
        @yield('fonts')

    </head>
    <body>

        <!-- navbar: start-->
        <div class="navbar-fixed no-margin">
            <nav>
                <div class="nav-wrapper">
                    <a href="#top" class="brand-logo grey-text margin-left-10 light page-items">Book Barter Club</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse grey-text"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#about" class="grey-text page-items">About</a></li>
                        <li><a href="#how" class="grey-text page-items">How it works</a></li>
                        <li><a href="" class="grey-text page-items">Login</a></li>
                        <li><a href="" class="grey-text page-items">Register</a></li>
                        <li><a href="#contact" class="grey-text page-items">Contact</a></li>
                    </ul>
                    <!-- sidebar: start-->
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#about" class="blue-text page-items">About</a></li>
                        <li><a href="#how" class="blue-text page-items">How it works</a></li>
                        <li><a href="" class="blue-text page-items">Login</a></li>
                        <li><a href="" class="blue-text page-items">Register</a></li>
                        <li><a href="#contact" class="blue-text page-items">Contact</a></li>
                    </ul>
                    <!-- sidebar: end-->
                </div>
            </nav>
        </div>
        <!-- navbar: end-->

        <!-- this section has the main content of the website -->
        <div class="container-fluid">
            <div class="row no-margin">
                @section('content')
                @show
            </div>
        </div>

        <!--Footer : start-->
        <footer class="blue page-footer no-margin" id="contact">
            <div class="container-fluid">
                <div class="row padding-40">
                    <!--form : start-->
                    <div class="col m6 s12 padding-none">
                        <div class="card white padding-none">
                            <div class="card-content padding-none">
                                <span class="card-title padding-none">Contact Us</span>
                                <form id="contact_us_form" class="row padding-none" action="" method="post">    
                                    <div class="input-field col s6 padding-none">
                                        <input id="name" name="name" type="text" class="validate padding-none">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="input-field col s6 padding-none">
                                        <input id="email" name="email" type="text" class="validate padding-none">
                                        <label for="email">Name</label>
                                    </div>
                                    <div class="input-field col s12 padding-none">
                                        <textarea id="message" name="message" rows='1' class="materialize-textarea padding-none"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <div class="input-field col s12 padding-none">
                                        <input type="submit" class="blue btn btn-block" value="Send">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--form : end-->

                    <!--links : start-->
                    <div class="col m6 s12 padding-left-10  text-capitalize">
                        <div class="collection with-header" id="bottom-collection">
                            <li class="collection-header light"><h5 class="light">Useful links</h5></li>
                            <a href="#!" class="collection-item page-items">Terms and conditions</a>
                            <a href="#about" class="collection-item page-items">About</a>
                            <a href="#how" class="collection-item page-items">How It Works</a>
                            <a href="#!" class="collection-item page-items">Search by location</a>
                            <a href="#!" class="collection-item page-items">Search by title</a>
                            <a href="#!" class="collection-item page-items">Login</a>
                            <a href="#!" class="collection-item page-items">Register</a>
                        </div>
                    </div>
                    <!--links : end-->
                </div>
            </div>
            <!--Copyright : start-->
            <div class=" footer-copyright padding-left-40 padding-right-40">
                <div class="container-fluid padding-left-10">
                    © 2016 BookBarterClub
                    <span class="right padding-right-10">
                        Facebook | Twitter | Google
                    </span>
                </div>


            </div>
            <!--Copyright : start-->
        </footer>
        <!--Footer : end-->



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>

        <!-- Javascript from any additional child pages can come here-->
        @yield('javascript')
    </body>
</html>