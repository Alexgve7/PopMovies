<?php 
require("../../../core/api/db.php");
$con = new Instance();
$GetCon = $con->Get();
$data = $GetCon->query("SELECT * FROM genders")->fetchAll();
?>
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peliculas</title>
     <!--Import Google Icon Font-->
        <link href="../../../resources/Alejandro/css/material_icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../../resources/Alejandro/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../../../resources/Alejandro/css/dashboard.css"  media="screen,projection"/>
      
</head>
<body>
    
<!--Header -->
  <!--Menu Vertical -->
  <ul id="slide-out" class="sidenav">
          <li>
            <div class="user-view">
                <div class="card">
                  <div class="card-content">
                    <p class="card-title center">PopMovies Admin</p>
                  </div>
                </div>
              <a href="#name"><span class="dark-text name">John Doe</span></a>
              <a href="#email"><span class="dark-text email">jdandturk@gmail.com</span></a>
            </div>
          </li>
          <li><a href="/Admin/DashBoard/"><i class="material-icons blue-text">dashboard</i>Dashboard</a></li>
          <li><a href="/Admin/DashBoard/Movies/"><i class="material-icons blue-text">movies</i>Peliculas</a></li>
          <li><a href="/Admin/DashBoard/Genders/"><i class="material-icons blue-text">insert_emoticon</i>Generos</a></li>
          <li><a href="#!"><i class="material-icons blue-text">beenhere</i>Proveedores</a></li>
          
          <li><div class="divider"></div></li>
          
          <li><a class="subheader">Usuarios y clientes</a></li>
          <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">accessibility</i> Clientes</a></li>
          <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">shop</i> Ventas</a></li>
          <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">account_circle</i> Usuarios</a></li>
          <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">bookmarks</i> Suscripciones</a></li>
        </ul>
        
        
        <!--Menu Hamburguesa -->
        <div class="blue">
            <a href="#" data-target="slide-out" class="blue sidenav-trigger btn left-align"><i class="material-icons">menu</i></a>
        </div>
        
        <!--Opciones Menu -->
        <nav class="blue m-5"> 
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center"> PopMovies </a>
            </div>
        </nav>

<div class="row">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-content">
                <p>Generos</p>
                <div class="divider"></div>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s10">
                        <i class="material-icons prefix">filter_list</i>
                        <input id="name" class="materialize-textarea dark-text" placeholder="Ingresa un genero" >
                      </div>
                      </div>
                      <ul class="collapsible">
                        <li>
                          <div class="collapsible-header"><i class="material-icons"> keyboard_arrow_down </i>Ver</div>
                          <?php  foreach($data as $row) { ?>
                          <div class="collapsible-body"><span> <?php print $row["gender"]; ?> </span></div>
                          <?php } ?>
                        </li>
                      </ul>
                  </form>
                </div>
                <button class="waves-effect waves-light btn-small blue" id="button"><i class="material-icons left">add</i>Agregar</button>
                <button class="waves-effect waves-light btn-small blue" id="GetGenders"><i class="material-icons left">add</i>Agregar</button>
                <input type="text" id="get">     
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../../../resources/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../resources/Alejandro/js/materialize.min.js"></script> 
<script type="text/javascript" src="../../../resources/Alejandro/js/dashboard.js"></script>
<script type="text/javascript" src="../../../core/Alejandro/controllers/IndexGendersController.js"></script>
</body>
</body>

</html>