<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>toDo</title>
        <link rel="stylesheet" href="{{ asset('/css/front.css') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}"/>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{ route('index')}}">
                            <img src="/img/logo.png" alt="" width="80">
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse text-uppercase">
                        <ul class="nav navbar-nav ">
                            <li class="{{ Request::is('tasks*')?'active':'' }}"><a href="{{ route('tasks.index')}}">tasks</a></li>
                            <li class="{{ Request::is('about')?'active':'' }}"><a href="{{ route('about')}}">about</a></li>
                            <li class="{{ Request::is('contact')?'active':'' }}"><a href="{{ route('contact')}}">contacts</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Login/Logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </header>

        @yield('content')

        <footer class="footer">
            <div class="container text-uppercase">
                <p>© UNTITLED. ALL RIGHTS RESERVED. | PHOTOS BY <span class="footer-text">FOTOGRPH</span> | DESIGN BY <span class="footer-text">TEMPLATED</span></p>
            </div>
        </footer>

    <script src="{{ asset('/js/front.js') }}"></script>
    </body>
</html>
