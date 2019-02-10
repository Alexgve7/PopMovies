<?php
include "core/Alejandro/helpers/public_page.php";
include("core/api/db.php");
Public_page::header();
?>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Nosotros</a></li>
    <li><a href="badges.html">Contactanos</a></li>
    <li><a href="collapsible.html">Catalogo</a></li>
    <li><a href="mobile.html">Iniciar Sesión</a></li>
  </ul>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="resources/Alejandro/img/slider/CapMarvel.jpg"> <!-- random image -->
        <div class="caption center-align">
          
        </div>
      </li>
      <li>
        <img src="resources/Alejandro/img/slider/EndGame.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="resources/Alejandro/img/slider/Shazam.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="resources/Alejandro/img/slider/ToyStory.png"> <!-- random image -->
        <div class="caption center-align">
         
        </div>
      </li>
    </ul>
  </div>

<!--Noticias -->
<div class="container">
<div class="row" id="TitleNews">
    <div class="nav-wrapper center" id="Options">
      <div class="col s18">
        <a  class="breadcrumb 10">PopMovies</a>
        <a  class="breadcrumb">Noticias</a>
        
      </div>
    </div>
</div>
</div>
<div class="row z-depth-4" id="NewsBackground">

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="OneNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/Ronin.jpg">
          
        </div>
        <div class="card-content">
        <span class="card-title" id="TitleOne">!Ronin en Avengers End Game! :0</span>
          <p id="NewOne">
           El primer adelanto mostró el regreso de grandes personajes que se ausentaron en “Avengers: Infinity War” como el de Hawkeye, quien ahora adoptará una nueva identidad y dejará las flechas para usar una katana.


           “Hemos perdido amigos, también familia… y una parte de nosotros”, es lo que se escucha decir a Steve Rogers para que luego aparezca la escena del regreso de Clint Barton, más conocido como Hawkeye, quien tras la desaparición de su familia con el chasquido de Thanos adopta la sangrienta forma de Ronin.
          </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="TwoNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/AvengersEndGame.jpg">
          
        </div>
        <div class="card-content">
        <span class="card-title">Viajes en el tiempo en Avengers End Game</span>
          <p id="NewTwo">
          Las teorías apuntan que este sería el dispositivo para viajar en el tiempo, aunque otros han comentado que sería una manera de facilitar el "tracking" de un personaje para incluir los efectos especiales en la edición.

De una u otra manera, flashbacks o viajes en el tiempo, estas fotos han cobrado cada vez más importancia con algunos datos que se han ido revelando, dando más fuerza a la posibilidad de que los Avengers hagan algún tipo de visita al pasado para impedir, o encontrar una manera de evitar, que Thanos destruya a la mitad de los seres vivos del universo
          </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/BenAffleck.png">
          
        </div>
        <div class="card-content">
        <span class="card-title">Ben Affleck deja de ser Batman</span>
          <p id="NewThree">
          Ben Affleck dejará de ser el justiciero tras solo tres películas donde nunca fue el gran protagonista: 'Batman v Superman', 'Liga de la Justicia' y un simple cameo en 'Escuadrón Suicida'.
          </p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
</div>
<!--Estrenos -->
<div class="row" id="TitleNews">
    <div class="nav-wrapper" id="Options">
      <div class="col s18">
        <a class="breadcrumb">PopMovies</a>
        <a class="breadcrumb">Noticias</a>
        <a class="breadcrumb">Estrenos</a>
      </div>
    </div>
</div>

<!--Carrousel -->
<div class="carousel " id="CardCarrousel">
    
    <div class="carousel-item">
      <div class="card sticky-action ">
          <div class="card-image ">
            <img src="resources/Alejandro/img/estrenos/CaptainMarvel.jpg" />
          </div>

          <div class="card-content">
            <span class="card-title">Capitana Marvel</span>  
            <p>¿Quieres saber más de esta fantastica pelicula? Hecha un vistazo!</p>
            <a href="public/CaptainMarvel.php">Ver Información</a>
          </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <div class="card">
        <div class="card-image">
          <img src="resources/Alejandro/img/estrenos/EndGame.png">
        </div>
        <div class="card-content">
          <span class="card-title">End Game</span>  
          <p>I am a very simple card.</p>
          <a href="public/EndGame.php">Ver Información</a>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <div class="card">
        <div class="card-image">
           <img src="resources/Alejandro/img/estrenos/SpiderFarFromHome.jpeg">
        </div>
        <div class="card-content">
          <span class="card-title">SpiderMan Far From Home</span>  
          <p>I am a very simple card.</p>
          <a href="#">Ver Trailer</a>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <div class="card">
        <div class="card-image">
          <img src="resources/Alejandro/img/estrenos/Shazam.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">SpiderMan Far From Home</span>  
          <p>I am a very simple card.</p>
          <a href="#">Ver Trailer</a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card">
        <div class="card-image">
            <img src="resources/Alejandro/img/estrenos/ShawandHobbs.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">Hobbs and Shaw</span>  
          <p>I am a very simple card.</p>
          <a href="#">Ver Trailer</a>
        </div>
      </div>
    </div>

</div>
<!--Fin Carrousel-->

<!--Empresa -->
<div class="row ">
  
  <div class="card orange">
      <div class="card-content">
        <h5 class="center-align white-text">Empresa</h5>
      </div>
  </div>

  <div class="row ">
        <div class="col s12">
        
          <ul class="tabs">

              <li class="tab col s4"> <a href="#Test1" class="orange-text"> ¿Como funcionamos? </a></li>
              <li class="tab col s4"> <a href="#Test2" class="orange-text"> Precios </a></li>
              <li class="tab col s4"> <a href="#Test3" class="orange-text"> Calidad </a></li>
          
          </ul>
        
        </div>

<!--Fin Como Funcionamos-->
      <div class="col s12" id="Test1">
        
        <div class="row">
          
          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Servicio Online</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Reserva Cliente</span>
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
<!--Fin Como Funcionamos-->
<!--Precios -->
    <div class="col s12" id="Test2">
     
      <div class="card z-depth-4">
      <span class="card-title" id="TitlePrice">Nuestro servicio con nuestros clientes se consituye en tipos de sucripciones con los cuales nosotros podemos asistirle una buena entrega de producto y rapido </span>

       <div class="card">              
        <table class="responsive-table" id="InformationTable">
          <thead>
            <tr>
              <th>Suscripcion</th>
              <th>Beneficio</th>
              <th>Precio</th>
              <th>Personas</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Silver</td>
              <td>Orden con DUI</td>
              <td>$10.00</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Gold</td>
              <td>Orden por Correo</td>
              <td>$15.00</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Black</td>
              <td>Orden por correo más descuento</td>
              <td>$20.00</td>
              <td>5</td>
            </tr>
          </tbody>
        </table> 
        </div>
      </div>
    </div>
<!--Fin Precios -->

<!--Calidad -->
  <div class="col s12" id="Test3">
    
          <div class="container" id="ContentCalidad">

          <div class="row">
            <div class="col s12 m10 offset-m1">
              <div class="card z-depth-4">
                <div class="card-content dark-text">
                  <span class="card-title">¡Calidad es nuestro compromiso! <i class="material-icons" id="CalidadIcon"> check </i> </span>
                  <p id="CalidadDescripcion">Nosotros estamos comprometidos a darte una buena calidad de contenido por lo tanto, 
                  hemos decidido ser la primera tienda de peliculas online.</p>
                  <p id="CalidadDescripcion">Nuestros productos cuenta con la mejor definición de contenido digital
                  lo cual nosotros sabemos que los clientes desean y por eso nosotros como empresa nuestros productos
                  seran exlusivamente Blu Ray, y nos compremetemos a tener que mas deseas para que tu las reserves y las puedas comprar inmediatamente. </p>
                </div>
                
              </div>
            </div>
          </div>         
          
          </div>
            
  </div>

  </div>
<!--Fin Calidad -->



</div>
<!--Fin Empresa -->

<?php
Public_page::footer();
?>
