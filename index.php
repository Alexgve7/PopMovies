<?php
include "core/helpers/public_page.php";
include("core/api/db.php");
Public_page::header();
?>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Nosotros</a></li>
    <li><a href="badges.html">Contactanos</a></li>
    <li><a href="collapsible.html">Galeria de Productos</a></li>
    <li><a href="mobile.html">Iniciar Sesión</a></li>
  </ul>

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="resources/img/slider/CapMarvel.jpg"> <!-- random image -->
        <div class="caption center-align">
          
        </div>
      </li>
      <li>
        <img src="resources/img/slider/EndGame.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="resources/img/slider/Shazam.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="resources/img/slider/ToyStory.png"> <!-- random image -->
        <div class="caption center-align">
         
        </div>
      </li>
    </ul>
  </div>


<!--Noticias -->
<div class="row" id="TitleNews">
    <div class="nav-wrapper center" id="Options">
      <div class="col s18">
        <a  class="breadcrumb 10">PopMovies</a>
        <a  class="breadcrumb">Noticias</a>
        
      </div>
    </div>
</div>
<div class="row z-depth-4" id="NewsBackground">

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="OneNew">
        <div class="card-image">
          <img src="resources/img/news/Ronin.jpg">
          
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
          <img src="resources/img/news/AvengersEndGame.jpg">
          
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
          <img src="resources/img/news/BenAffleck.png">
          
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

<div class="row" id="TitleNews">
    <div class="nav-wrapper" id="Options">
      <div class="col s18">
        <a class="breadcrumb">PopMovies</a>
        <a class="breadcrumb">Noticias</a>
        <a class="breadcrumb">Estrenos</a>
      </div>
    </div>
</div>

<div class="carousel " id="CardCarrousel">
    
    <div class="carousel-item">
      <div class="card sticky-action ">
          
      <div class="card-image ">

        <img src="resources/img/estrenos/CaptainMarvel.jpg" />
        
      
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
          <img src="resources/img/estrenos/EndGame.png">
         
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
          <img src="resources/img/estrenos/SpiderFarFromHome.jpeg">
          
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
          <img src="resources/img/estrenos/Shazam.jpg">
          
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
          
        <img src="resources/img/estrenos/ShawandHobbs.jpg">
          
        </div>
        <div class="card-content">
        
        <span class="card-title">Hobbs and Shaw</span>  
      
        <p>I am a very simple card.</p>
        <a href="#">Ver Trailer</a>
      
      </div>
      </div>
    </div>
    
</div>
<div class="container" id="TitleProducts">
  <div class="card">
    <div class="card-content orange white-text">
      <h5>Productos en venta</h5>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/Annabelle.jpg">
            
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/Annabelle2.jpg">
           
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/Avengers.jpg">
           
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/AgeOfUltron.jpeg">
           
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/CapitanAmerica.jpg">
           
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
      <div class="col s10 m2">
        <div class="card">
          <div class="card-image responsive-image">
            <img src="resources/img/Products/CapitanAmerica2.jpg">
           
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div> 
     
    </div>
</div>
<div class="container">
  <div class="card">
        <div class="card-container center">
          <h5>¡Puedes ver más creando tu cuenta o Iniciando Sesión!</h5>
        </div>
        <div class="card-action">
          <a href="#" class="align-left"> <i class="material-icons" id="LogoI">done</i> Crear Cuenta</a>
          <a href="#" class="align-right">  <i class="material-icons" id="LogoI">account_circle</i> Iniciar Sesión</a>
        </div>
  </div>
</div>
<div class="row">
  <div class="card">
    
    <div class="card-content center">   
      <h5>Equipo Desarollador</h5> 
    </div>
  
    <div class="card">
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel lighten-5 z-depth-1">
          <div class="row valign-wrapper">
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
Public_page::footer();
?>