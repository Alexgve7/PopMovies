<?php
include "core/tab.php";
tab::views();
?>

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="img/Compras/HG.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Category +15</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
              <span>$99</span>
            </p>

            <p class="lead font-weight-bold">Sinopsis</p>

            <p>En lo que alguna vez fue Norteamérica, la Capital de Panem mantiene sus 12 distritos obligándolos a seleccionar a un niño y a una niña, llamados Tributos, a competir en un evento televisado nacionalmente llamados Juegos del Hambre. Cada ciudadano debe ver pelear a muerte a los jóvenes. El Tributo del Distrito 12, Katniss Everdeen sólo confía en sus habilidades de caza y buenos instintos en una arena en donde debe sobrevivir contra la humanidad.</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="0" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Comprar
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      
        <!--Comentarios-->
          <div class="card mb-4 wow fadeIn">
            <div class="card-header font-weight-bold">
              <span>Comentarios</span>
                <span class="pull-right">
                  <a href="">
                    <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-twitter mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-linkedin-in mr-2"></i>
                  </a>
                </span>
            </div>
          <!--Card content-->
            <div class="card-body">
              <div class="media d-block d-md-flex mt-3">
                <img class="d-flex mb-3 mx-auto z-depth-1" src="img/overlays/2.jpg" alt="Generic placeholder image" style="width: 100px;">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                  <h5 class="mt-0 font-weight-bold">Akeno Monticelli
                    </h5>
                    Hasta fue harto difícil conseguir datos fehacientes acerca de algunos de sus realizadores y protagonistas, pero el nombre original del film que nos ocupa es "Hunger Games", obviamente sin equivalente linguistico por estos lares; ni siquiera hay registros de que haya tenido una traducción oficial para Estados Unidos.
                </div>
              </div>
              <div class="media d-block d-md-flex mt-3">
                <img class="d-flex mb-3 mx-auto z-depth-1" src="img/overlays/1.jpg" alt="Generic placeholder image" style="width: 100px;">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                  <h5 class="mt-0 font-weight-bold">Ned Beckham
                    </h5>
                    Los directores son un dueto: Nuttapeera Chomsri y Sranya Noithai. Todo dicho. Nuttapeera no posee datos acerca de otro filme aparte de éste, y en el caso de Sranya, solamente de uno más. La película es, como mencionamos, originaria de Tailandia, y hablada en tailandés. Fue completamente un éxito.
                </div>
              </div>
              <div class="media d-block d-md-flex mt-3">
                <img class="d-flex mb-3 mx-auto z-depth-1" src="img/overlays/piq_369750_400x400.png" alt="Generic placeholder image" style="width: 100px;">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                  <h5 class="mt-0 font-weight-bold">Shigure Brooks Douzeth
                    </h5>
                    La película es bastante interesante, aunque la regular calidad de la copia de la cual nos hicimos, dificultó un tanto el poder disfrutar de la misma adecuadamente. Pero hubimos de contentarnos con ello, porque las posibilidades de conseguir una mejor, no eran demasiadas. Igual fue suficiente para formarnos una idea clara acerca de esta obra.
                </div>
              </div>
            </div>
          </div>
        <!--/.Comentarios-->
          <!--Reply-->
          <div class="card mb-3 wow fadeIn">
            <div class="card-header font-weight-bold">Leave a reply</div>
              <div class="card-body">
                  <form>
                    <!-- Form -->
                    <div class="form-group">
                      <label for="replyFormComment">Your comment</label>
                      <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                    </div>
                    <!-- Name -->
                      <label for="replyFormName">Your name</label>
                      <input type="email" id="replyFormName" class="form-control">
                    <!-- Email -->
                      <label for="replyFormEmail">Your e-mail</label>
                      <input type="email" id="replyFormEmail" class="form-control">
                    <!-- Button -->
                    <div class="text-center mt-4">
                      <button class="btn btn-info btn-md" type="submit">Post</button>
                    </div>
                  </form>
                <!-- Default form reply -->
              </div>
            </div>
          <!--/.Reply-->
        <!--Comentarios-->

      <div class="row wow fadeIn">

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> PopMovies.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>