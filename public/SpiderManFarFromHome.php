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
            <link type="text/css" rel="stylesheet" href="../resources/Alejandro/css/home.css"  media="screen,projection"/>
</head>
<body>
<!--Menu NavBar -->
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
<!--Fin Menu NavBar -->
<!--Menu Vertical -->
<ul class="sidenav" id="mobile-demo">
    
    <li><a href="/public/We.php">Nosotros</a></li>
    <li><a href="/public/contact.php">Contactos</a></li>
    <li><a href="/public/Products.php">Catalogo</a></li>
    <li><a href="/signup/">Registrate</a></li>
    <li><a href="/login/">Iniciar Sesión</a></li>
</ul>
<!-- Fin Menu Vertical -->
<div class="container">
    
    <div class="row Z-depht-4 center-align">
        <div class="card">
            <h4 class="center-align">Spider Man</h4>
        </div>
    </div>

    
    <div class="col s12 m7 ">
        <div class="card ">
            <div class="card-image center-align">
                <img src="../resources/Candray/img/Pages/spiderman.jpeg" alt="">
            </div>
        </div>
    </div>            

    <div class="card">
        <div class="card-content">
            <span class="card-title">¿Quien es Spider Man?</span>
            <p> 
          Spider-Man es uno de los superhéroes más populares y exitosos comercialmente. ​Como personaje insignia de Marvel y mascota de la compañía, ha aparecido en innumerables formas de medios, incluidas varias series de televisión animadas y de acción en vivo, tiras cómicas de periódicos sindicados y en una serie de películas.
            Su historia de origen lo tiene adquiriendo habilidades relacionadas con la araña después de un mordisco de una araña radioactiva; estos incluyen aferrarse a las superficies, disparar telarañas desde dispositivos montados en la muñeca y detectar el peligro con su "sentido arácnido".
            En Spider-Verse, se revela que sus poderes arácnidos y sus equivalentes de todas las realidades son la clave para el control total del Multiverso Marvel. 
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title">¿Cuando se estrena?</span>
            <p> 
                Fecha de estreno: 5 de julio de 2019
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
                                    <source src="../resources/Candray/Videos/spiderman-trailer.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 10">
                        <div class="card">
                            <div class="card-image">
                                <video class="responsive-video" controls>
                                    <source src="../resources/Candray/Videos/spiderman-trailer2.mp4" type="video/mp4">
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