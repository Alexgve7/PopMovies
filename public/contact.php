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

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>

<div class="container">
    
        <div class="col s12 m10 offset-m1">
        
            <div class="card">
            
                <div>
                    
                    <div class="card-content">
                    <span class="card-title m10 offset-m1">Pone en contacto con nosotros!</span>
                    <h5>Hola! Como cliente puedes enviarnos un correo para ponernos de acuerdo contigo!</h5>
                    </div>
                </div>

            </div>
            <div class="card">
            
            <div>
                
                <div class="card-content">
                    <div>
                        <div class="left-align">

                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="card z-depth-4">
                                        <div class="card-content">
                                            <span class="card-title">Envianos Un Mensaje!</span>
                                                
                                                <form action="">
                                                    <div class="row">
                                                        <div class="input-field col s10">
                                                            <i class="material-icons prefix black-text">account_circle</i>
                                                            <input id="Name" type="text" class="validate">
                                                            <label for="icon_prefix">Nombre:</label>
                                                        </div>
                                                        
                                                        <div class="input-field col s10">
                                                            <i class="material-icons prefix black-text">phone</i>
                                                            <textarea id="Message" class="materialize-textarea"></textarea>
                                                            <label for="textarea1">Textarea</label>
                                                        </div>
                                                        
                                                    </div>
                                                </form>
                                        </div>
                                        <div class="card-action">
                                            <a href="" OnClick="validateContact();">Enviar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <span class="card-title">Card Title</span>
                                            <p>I am a very simple card. I am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="#">This is a link</a>
                                            <a href="#">This is a link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            
            </div>

        </div>

    </div>

</div>
    <script type="text/javascript" src="../resources/Alejandro/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../resources/Alejandro/js/materialize.min.js"></script>
    <script type="text/javascript" src="../resources/Alejandro/js/pages/pages.js"></script>
</body>
</html>
