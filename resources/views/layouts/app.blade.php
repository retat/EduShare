<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>EduShare</title>
    <link rel="icon" href="/image/Logosmall.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <!--<link rel="stylesheet" href="/css/app.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/customcss.css">
</head>
<body>
<div id="app">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('start') }}">
            <img src="/image/EduShare.png" width="70" height="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (\Request::route()->getName() == 'uebersicht') ? 'active' : '' }}" href="{{route('uebersicht')}}">Übersicht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (\Request::route()->getName() == 'forum') ? 'active' : '' }}" href="{{route('forum')}}">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (\Request::route()->getName() == 'bewerten') ? 'active' : '' }}" href="{{route('bewerten')}}">Bewerten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (\Request::route()->getName() == 'ranking') ? 'active' : '' }}" href="{{ route('ranking')}}">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (\Request::route()->getName() == 'aktivitäten') ? 'active' : '' }}" href="{{ route('aktivitäten') }}">Aktivitäten</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Suchen" aria-label="Search">
            </form>
            <?php if (\Auth::check()) { ?>
            <button id="accountbutton" class="btn btn-primary dropdown">
                <p href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                   aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} <sp    an class="caret"></span>
                </p>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </button>
            <?php } else { ?>
            <form action="{{ route('login') }}">
                <button class="btn btn-primary ml-2.desktop">Login</button>
            </form>
            <?php } ?>
        </div>
    </nav>
    @yield('content')
</div>

<img src="/public/image">

<footer class="page-footer font-small blue pt-4 mt-4">

    <div class="container-fluid text-center text-md-left ">
        <div class="row">

            <div class="col-md-6 mx-auto">
                <h5 class="text-uppercase">EduShare</h5>
                <p>Die EduShare Plattform ist ein Projekt von Gianmarco Giretti und René Borner für die Web-Tech
                    Vorlesung</p>
            </div>

            <div class="col-md-4 ">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/Impressum/impressum.html">Impressum</a>
                    </li>
                    <li>
                        <a href="mailto:borner.rene@gmail.com">Kontakt</a>
                    </li>
                    <li>
                        <a href="/Rechtliches/rechtliches.html">Rechtliches</a>
                    </li>
                </ul>
                <label for="countries"></label><select name="countries" id="countries" style="width:150px;">
                    <option>Deutsch</option>
                </select>
            </div>
        </div>
        <div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div id="social" class="text-center center-block">
            <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com"><i class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:marco.giretti9@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
