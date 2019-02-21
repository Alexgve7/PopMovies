<?php 
require("../../../core/Alejandro/helpers/admin_pages.php");

$header = new AdminPage();
$putFooter = $header->AdminHeader();
?>

<?php print $putFooter; ?>
<div class="full-size">
  <div class="row">
    <div class="card  light-blue darken-1 white-text">
      <div class="card-content">
        <p>¡Bienvenido!<?php  
        setlocale(LC_ALL,"es_ES");
        echo strftime(" "."%A %d de %B del %Y");
        ?></p>
      </div>
    </div>
  </div>
</div>

<!--DashBoard -->
<div class="full-size">

  <div class="row grey lighten-3">
    <div class="col s12 m3 ">
      <div class="card z-depth-2">
        <div class="card-content">
          <span class="card-title center"> <i class="material-icons icon blue-text">show_chart</i> </span>
        </div>
        <div class="card-content">
          <span class="card-title center">Cantidad de Peliculas</span>
          <p class="center">10</p>
          <div class="progress white lighten-1">
            <div class="determinate red" style="width: 10%"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m3">
      <div class="card z-depth-2">
        <div class="card-content">
        <span class="card-title center"> <i class="material-icons icon blue-text" id="">card_membership</i> </span>
        </div>
        <div class="card-content">
        <span class="card-title center">Cantidad de membresias</span>
          <p class="center">3</p>
        </div>
      </div>
    </div>

    <div class="col s12 m3">
      <div class="card z-depth-2">
        <div class="card-content">
        <span class="card-title center"> <i class="material-icons icon blue-text" id="">attach_money</i> </span>
        </div>
        <div class="card-content">
        <span class="card-title center">Compras realizadas</span>
          <p class="center">40</p>
          <div class="progress white lighten-1">
            <div class="determinate red" style="width: 70%"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m3">
      <div class="card z-depth-2">
        <div class="card-content">
        <span class="card-title center"> <i class="material-icons icon blue-text" id="">shop</i> </span>
        </div>
        <div class="card-content">
        <span class="card-title center">Nuevos productos</span>
          <p class="center">20</p>
          <div class="progress white lighten-1">
            <div class="determinate red" style="width: 20%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="full-size">
  <div class="row">
    <div class="card">
      <div class="col s12 m6">
        <span class="card-title">Proveedores</span>
        <div class="card">
          <div class="card-content">
            <table class="responsive-table">
              <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Nombre</th>
                    <th>Contacto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Walmart</td>
                  <td>Vladimir Orellana</td>
                  <td>vladimir.orellana@gmail.com</td>
                </tr>
                <tr>
                  <td>Costco</td>
                  <td>Frederic Hosbau</td>
                  <td>FredHosbau@gmail.com</td>
                </tr>
                <tr>
                  <td>Sanborns</td>
                  <td>Emilio Coreas</td>
                  <td>EmilCoreas@gmail.com</td>
                </tr>
              </tbody>
            
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input id="search" type="search" required placeholder="Filtrar...">
                    <label for="" class="label-icon" for="search"> <i class="material-icons">search</i> </label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>

            </table>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <span class="card-title">Membresias</span>
        <div class="card">
          <div class="card-content">
            <table class="responsive-table">
              <thead>
                <tr>
                    <th>Membresia</th>
                    <th>Beneficio</th>
                    <th>Precio</th>
                    <th>Personas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Silver</td>
                  <td>Orden con DUI</td>
                  <td>$5</td>
                  <td>1</td>
                 </tr>
                <tr>
                  <td>Alan</td>
                  <td>Orden por correo</td>
                  <td>$10</td>
                  <td>3</td>
                   </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Orden por correo y descuento</td>
                  <td>$20.00</td>
                  <td>5</td>
                 </tr>
              </tbody>
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input id="search" type="search" required placeholder="Filtrar...">
                    <label for="" class="label-icon" for="search"> <i class="material-icons">search</i> </label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="full-size">
      
    
</div>


<script type="text/javascript" src="../../../resources/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../resources/Alejandro/js/materialize.min.js"></script> 

<script type="text/javascript" src="../../../resources/Alejandro/js/dashboard.js"></script>       

</body>
</html>