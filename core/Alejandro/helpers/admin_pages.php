<?php 
class AdminPage{

    public function AdminHeader(){
        print 
        '
          <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Admin</title>
      <!--Import Google Icon Font-->
      <link href="../../../resources/Alejandro/css/material_icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../../resources/Alejandro/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../../../resources/Alejandro/css/dashboard.css"  media="screen,projection"/>
      <script type="text/javascript" src="../../../resources/js/jquery-3.2.1.min.js"></script>
      </head>
    <body>

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

      <li><a href="/private/Admin/Dashboard/"><i class="material-icons blue-text">dashboard</i>Dashboard</a></li>
      <li><a href="/private/Admin/Dashboard/Movies/"><i class="material-icons blue-text">movies</i>Peliculas</a></li>
      <li><a href="/private/Admin/Dashboard/Genders/"><i class="material-icons blue-text">insert_emoticon</i>Generos</a></li>
      <li><a href="#!"><i class="material-icons blue-text">beenhere</i>Proveedores</a></li>

      <li><div class="divider"></div></li>

      <li><a class="subheader">Usuarios y clientes</a></li>
      <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">accessibility</i> Clientes</a></li>
      <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">shop</i> Ventas</a></li>
      <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">account_circle</i> Usuarios</a></li>
      <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">bookmarks</i> Suscripciones</a></li>
      <li><a class="waves-effect" href="#!"> <i class="material-icons blue-text">logoff</i>Cerrar Sesion</a></li>
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
        ';
    }

}

?>