<?php
include "core/Alejandro/helpers/public_page.php";
include("core/api/db.php");
Public_page::header();
?>

<!--Menu vertical -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="/public/We.php">Nosotros</a></li>
    <li><a href="/public/contact.php">Contactanos</a></li>
    <li><a href="/public/products.php">Catalogo</a></li>
    <li><a href="/login/">Iniciar Sesión</a></li>
  </ul>

<!--Slider -->
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
  <div class="row z-depth-4" id="TitleNews">
      <div class="nav-wrapper" id="Options">
        <div class="col s18">
          <a class="breadcrumb 10">PopMovies</a>
          <a class="breadcrumb">Noticias</a>
        </div>
      </div>
  </div>
</div>

<div class="row z-depth-4" id="NewsBackground">

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/ProfesorHulk.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">¿Veremos a profesor Hulk en Avengers End Game?</span>
          <p id="NewThree">
            Los posters de Avengers End Game, a hulk se le puede observar un nuevo 
            traje por lo que nos lleva a pensar que bruce banner y hulk se pueden unir hulk pueda ser más civilizado y inteligente.
          </p>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/GodRonin.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">Doble identidad de Hawkeye en EndGame: Ronin</span>
          <p id="NewThree">
            Luego del chasquido hawkeye pierde a su familia por lo tanto que lo lleva a ocupar otra 
            identidad en busca de justicia por la muerte de su familia.
          </p>
        </div>
        
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/FarFromHome.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">!Misterio confirmado para Far From Home!</span>
          <p id="NewThree">
            Misterio es confirmado como lista de los villanos de SpiderMan, 
            ademas de los elementales que vimos en el trailer inicial podemos ver que misterio tiene un papel de heroe tambien ¿Como terminara?
          </p>
        </div>
       
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/Forky2.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">Forky el nuevo personaje de Toy Story!</span>
          <p id="NewThree">
           Forky un nuevo personaje que se unira a la familia de nuestros juguetes favoritos de disney, pero que importancia tendra este personaje?
          </p>
        </div>
       
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/DareDevil.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">DareDevil para temporada 4!</span>
          <p id="NewThree">
            Daredevil tras lanzar su reciente 3ra Temporada, se escuchan los rumores que puede volver a las pantallas de nuestros espectadores, pero esta vez con Diseney+.
          </p>
        </div>
       
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/ToyStoryOthers.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">Ben Affleck deja de ser Batman</span>
          <p id="NewThree">
            Ben Affleck dejará de ser el justiciero tras solo tres películas 
            donde nunca fue el gran protagonista: 'Batman v Superman', 
            'Liga de la Justicia' y un simple cameo en 'Escuadrón Suicida'.
          </p>
        </div>
       
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/NewWolverine.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">¿Daniel Radcliffe para el nuevo lobezno?</span>
          <p id="NewThree">
            Daniel Radcliffe, segun las entrevistas y revistas famosas de nueva york han publicado que Daniel es 
            un nuevo candidato para Marvel como el nuevo lobezno y ponerlo en la gran pantalla.
          </p>
        </div>
        
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/Deadpool2.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">DeadPool para el UCM</span>
          <p id="NewThree">
           Marvel y disney estan hacen lo posible por comprar todos los personajes de FOX y lograr tener superheroes y poder
           estar en el UCM entre ellos los 4 Fantasticos, los X Men y  DeadPool
          </p>
        </div>
       
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card z-depth-4" id="ThreeNew">
        <div class="card-image">
          <img src="resources/Alejandro/img/news/LokiandScarlet.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">Serie propia de Loki y la Bruja Escarlata.</span>
          <p id="NewThree">
           Disney+ por lo visto quiere que loki y la bruja escarlata sean un poco reconocidos, 
           no solo en pantalla grande si no conocer más a fondo de ellos dandoles una serie para cada uno.
          </p>
        </div>
        
      </div>
    </div>
</div>
<!--Estrenos -->
<div class="row" id="TitleNews">
    <div class="nav-wrapper z-depth-4" id="Options">
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
            <a href="public/CaptainMarvel.php">Ver Trailer</a>
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
          <p>Viajes en el tiempo, heroes caidos. Estamos en lo ultimo</p>
          <a href="public/EndGame.php">Ver Trailer</a>
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
          <p>Un viaje, grandes enemigos un solo objetivo.</p>
          <a href="public/SpiderManFarFromHome.php">Ver Trailer</a>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <div class="card">
        <div class="card-image">
          <img src="resources/Alejandro/img/estrenos/Shazam.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">Shazam</span>  
          <p>Una nueva forma de vivir, un gran heroismo y gran responsabilidad.</p>
          <a href="public/Shazam.php">Ver Trailer</a>
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
          <p>Un enemigo mortal, una amistad de adrenalina.</p>
          <a href="public/HobbsandShaw.php">Ver Trailer</a>
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
                <p>Nosotros como empresa queremos que nuestro servicio online de compras de peliculas sea facil y rapido
                  , más con los tipos de suscripción tus compras seran unicas y rapidas</p>
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
                <p>Nosotros con nuestras suscripciones buscamos que te sientas comodo como cliente que todo este al instante
                y tambien podemos considerar precios preferenciales a nuestros usuarios, por las compras realizadas.</p>
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

<!--Fin afiliados!-->
<div class="row">

  <div class="card orange white-text">
    <div class="card-content">
      <div>
        <span class="card-title center-align">Empresas afiliadas</span>
      </div>
    </div>
  </div>
  
  <div class="row">
  
    <div class="col s12 m4">
        <div class="card z-depth-4">
          <div class="card-content white-text">
            <div class="card-image">
              <img src="resources/Alejandro/img/Pages/WalmartLogo.jpg" alt="">
            </div>
          </div>
          <div class="card-action">
            <span class="card-title">Walmart C.A </span>
          </div>
        </div>
      </div>
      
    <div class="col s12 m4">
        <div class="card z-depth-4">
          <div class="card-content white-text">
            <div class="card-image">
              <img src="resources/Alejandro/img/Pages/SanbornsLogo.jpg" alt="" srcset="">
            </div>
          </div>
          <div class="card-action">
          <span class="card-title">Sanborns El Salvador</span>
          </div>
        </div>
      </div>
      
    <div class="col s12 m4">
        <div class="card z-depth-4">
          <div class="card-content white-text">
            <div class="card-image">
              <img src="resources/Alejandro/img/Pages/Costco2.jpg" alt="" srcset="">
            </div>
          </div>
          <div class="card-action">
            <span class="card-title">Costco SuperMarket</span>
          </div>
        </div>
      </div>

  </div>
</div>
<!--Fin Afiliados -->

<?php
Public_page::footer();
?>
