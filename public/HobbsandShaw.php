<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop Movies</title>
     <!--Import Google Icon Font-->
     <link href="../resources/Alejandro/css/material_icons.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../resources/Candray/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../resources/Alejandro/css/home.css"  media="screen,projection"/></head>
    <link rel="icon" href="../resources/Alejandro/img/Logo.ico">
</head>
<body>
<!--Barra de Opciones -->
<nav class="m-5" id="NavBar">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo justify"> PopMovies </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="/">Inicio</a></li>
            <li><a href="/public/We.php">Nosotros</a></li>
            <li><a href="/public/contact.php">Contactos</a></li>
            <li><a href="/public/Products.php">Catalogo</a></li>
            <li><a href="/signup/">Registrate</a></li>
            <li><a href="/login/">Iniciar Sesión</a></li>
        </ul>
    </div>
</nav>
<!-- Fin Barra de Opciones -->

<!-- Menu Vertical -->
<ul class="sidenav" id="mobile-demo">
    
    <li><a href="/public/We.php">Nosotros</a></li>
    <li><a href="/public/contact.php">Contactos</a></li>
    <li><a href="/public/Products.php">Catalogo</a></li>
    <li><a href="/signup/">Registrate</a></li>
    <li><a href="/login/">Iniciar Sesión</a></li>
</ul>
<!--Fin Menu Vertical -->

<!--Contenido -->
<div class="container">
    
    <div class="row Z-depht-4 center-align">
        <div class="card">
            <h4 class="center-align">Hobbs and Shaw</h4>
        </div>
    </div>

    
    <div class="col s12 m7 ">
        <div class="card ">
            <div class="card-image center-align">
                <img src="../resources/Candray/img/Pages/hobbs.jpg" alt="">
            </div>
        </div>
    </div>            

    <div class="card">
        <div class="card-content">
            <span class="card-title">Mas sobre Hobbs and Shaw</span>
            <p> 
                Hobbs and Shaw es una próxima película estadounidense de acción dirigida por David Leitch y escrita por Chris Morgan. Se trata de un spin-off de The Fast and The Furious serie con los personajes Lucas Hobbs y Deckard Shaw en los papeles protagonistas. La película está protagonizada por Dwayne Johnson, Jason Statham, Vanessa Kirby, y Idris Elba. 
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title">¿Cuando se estrena?</span>
            <p> 
                Fecha de estreno: 2 de agosto de 2019
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title">Trailers y TV Spots</span>
                <div class="row">
                    <div class="col s12 m6 10">
                        <div class="card">
                            <div class="card-image">
                                <video class="responsive-video" controls>
                                    <source src="../resources/Candray/Videos/ryp1.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 10">
                        <div class="card">
                            <div class="card-image">
                                <video class="responsive-video" controls>
                                    <source src="../resources/Candray/Videos/ryp2.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                  
                </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../resources/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../resources/Candray/js/materialize.min.js"></script>
    <script type="text/javascript" src="../resources/Candray/js/pages/pages.js"></script>
</body>
</html>