<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Tut</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/myCss.css">

    <!-- Other CSS -->
    @yield('css')


</head>
<body>
    @section('navbar')
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper container">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="left">
                            <a href="#!" class="brand-logo">Proj Tut</a>
                        </ul>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="/">Associations</a></li>
                            <li><a href="badges.html">Evenements</a></li>
                            <li><a href="collapsible.html">Départements</a></li>
                            <li><a href="collapsible.html">Login</a></li>
                            <li><a href="collapsible.html">Register</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Associations</a></li>
                            <li><a href="badges.html">Evenements</a></li>
                            <li><a href="collapsible.html">Départements</a></li>
                            <li><a href="collapsible.html">Login</a></li>
                            <li><a href="collapsible.html">Register</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    @show


    @yield('content')

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l4 s12 center-align">
                    <h5 class="white-text">Cadre Du Projet</h5>
                    <p class="grey-text text-lighten-4">Ce site a été réalisé dans le cadre d'un projet tutoré en S3-S4 à l'IUT informatique de Belfort en 2017. </p>
                </div>
                <div class="col l4 s12 center-align">
                    <h5 class="white-text">A Propos</h5>
                    <ul>
                        <li><a href="" class="grey-text text-lighten-3"><i class="tiny material-icons">person</i> Association</a></li>
                        <li><a href="" class="grey-text text-lighten-3"><i class="tiny material-icons">person</i> Evénements</a></li>
                        <li><a href="" class="grey-text text-lighten-3"><i class="tiny material-icons">person</i> Departements</a></li>
                        <li><a href="{{ route('profile') }}" class="grey-text text-lighten-3"><i class="tiny material-icons">person</i> Profil</a></li>
                        <li><a href="{{ route('contacts') }}" class="grey-text text-lighten-3"><i class="tiny material-icons">person</i> Equipe</a></li>
                    </ul>
                </div>
                <div class="col l4 s12 center-align">
                    <h5 class="white-text">Contact</h5>
                    <ul>
                        <li class="grey-text text-lighten-3"><i class="tiny material-icons">home</i> IUT de Belfort-Montbéliard</li>
                        <li class="grey-text text-lighten-3"><i class="tiny material-icons">location_on</i> 19 av. du Maréchal Juin</li>
                        <li class="grey-text text-lighten-3"><i class="tiny material-icons">email</i> ced-slach@yahoo.bolivie</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!-- My Javascript -->
    <script src="js/myJs.js"></script>
</body>
</html>