<?php
class Public_page{
    
    public static function header(){
        print('
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!--Import Google Icon Font-->
            <link href="resources/Alejandro/css/material_icons.css" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="resources/Alejandro/css/materialize.min.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="resources/Alejandro/css/home.css"  media="screen,projection"/>
            <title>Pop Movies</title>
        </head>
        <body>
       
        <nav class="m-5" id="NavBar">
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo justify"> PopMovies </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Nosotros</a></li>
                <li><a href="public/contact.php">Contactos</a></li>
                <li><a href="collapsible.html">Catalogo</a></li>
                <li><a href="mobile.html">Iniciar Sesión</a></li>
            </ul>
            </div>
        </nav>
        
<main>
        ');
    }

    public static function footer(){
        print('
        </main>
            <footer class="page-footer black" id="Footer">
                <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                    <h5 class="white-text">PopMovies</h5>
                    <p class="grey-text text-lighten-4">De nuestra tienda a tu TV con la mejor calidad!.</p>
                    <div class="card col s5">    
                    <div class="card-image">
                            <img src="resources/Alejandro/img/Logo.ico">
                        </div>
                    </div>
                    </div>
                    <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="footer-copyright">
                <div class="container">
                © 2018 Copyright PopMovies
                                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
                </div>
            </footer>

            <!--JavaScript at end of body for optimized loading-->
            <script type="text/javascript" src="resources/js/global/js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/materialize.min.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/public.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/collapsile.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/carrousel.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/CardSlider.js"></script>
            <script type="text/javascript" src="resources/Alejandro/js/Tabs.js"></script>
        </body>
        </html>
        ');
    }
}
?>