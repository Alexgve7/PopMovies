<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contactanos</title>
            <!--Import Google Icon Font-->
            <link href="../resources/Alejandro/css/material_icons.css" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="../resources/Alejandro/css/materialize.min.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="../resources/Alejandro/css/home.css"  media="screen,projection"/>
            <link rel="icon" href="../resources/Alejandro/img/Logo.ico">
</head>
<body>
<!--Menu Opciones -->
<nav class="m-5" id="NavBar">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo justify"> PopMovies </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Nosotros</a></li>
            <li><a href="/public/contact.php">Contactos</a></li>
            <li><a href="/public/Products.php">Catalogo</a></li>
            <li><a href="mobile.html">Iniciar Sesión</a></li>
        </ul>
    </div>
</nav>
<!--Fin Menu Opciones -->

<!--Menu Vertical -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>
<!--Fin Menu Vertical -->

<!--Contenido -->
<div class="container">
  <div class="col s12 m10 offset-m1">
    <div class="card ">
      <div>
          <div class="card-content">
          <span class="card-title m10 offset-m1">Pone en contacto con nosotros!</span>
          <h5>Hola! Como cliente puedes enviarnos un correo para ponernos de acuerdo contigo!</h5>
          </div>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
      <!--Contenido de la carta -->
        <div class="row">
        <!--Formulario para envio de comentarios y mensajes -->
          <div class="col s12 m6">
            <div class="card z-depth-4">
              <div class="card-content black-text">
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s8">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Nombre:</label>
                      </div>
                      <div class="input-field col s8">
                        <i class="material-icons prefix">message</i>
                        <textarea id="textarea1"  class="materialize-textarea"></textarea>
                        <label for="icon_prefix">Mensaje:</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-action">
                <a href="">Enviar Mensaje</a>
              </div>
            </div>
          </div>
          <!--Fin Formulario para envio de comentarios y mensajes -->

          <!--Anuncio -->
          <div class="col s12 m6">
            <div class="card z-depth-4">
              <div class="card-content black-text">
                <div class="card-content z-depth-4 orange white-text">
                  <span class="card-title">¡Recuerda!</span>
                </div>
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Te mantendremos informado de todas las noticias y tendencias del momento
                    , conforme vayas visitando nuestro sitio web podras ver todas las noticias y estrenos en tendencias!</span>
                  </div>              
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--FinAnuncio -->

        <!--Contenido de la carta -->
      </div>
    </div>
  </div>
</div>


    <script type="text/javascript" src="../resources/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../resources/Alejandro/js/materialize.min.js"></script>
    <script type="text/javascript" src="../resources/Alejandro/js/pages/pages.js"></script>
</body>
</html>
