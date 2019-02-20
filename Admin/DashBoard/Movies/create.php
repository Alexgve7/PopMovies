<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<!--Contenido -->
<div class="card">
    <div class="card-content">
        <span class="car-title flow-text">Registrar Pelicula</span>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">insert_drive_file</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Ingrese Nombre de la pelicula</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">notes</i>
                                    <textarea name="" class="materialize-textarea" id="" cols="30" rows="10"></textarea>
                                    <label for="icon_prefix">Ingrese Sipnosis de la pelicula:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">control_point</i>
                                    <input id="icon_prefix" type="number" class="validate">
                                    <label for="icon_prefix">Digite la cantidad de producto de la pelicula:</label>
                                </div>  
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">attach_money</i>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" max="10">
                                    <label for="icon_prefix">Digite el precio de la pelicula: </label>
                                </div>  
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">calendar_today</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Ingrese el año de la pelicula:</label>
                                </div>  
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">schedule</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Ingrese la duración de la pelicula:</label>
                                </div>  
                                <div class="input-field col s6">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Seleccione el genero de la pelicula</option>
                                                <option value="1">Miedo</option>
                                                <option value="2">Accion</option>
                                                <option value="3">Comedia</option>
                                            </select>
                                        </div>
                                </div>  
                                <div class="input-field col s6">
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Seleccione proveedor</option>
                                            <option value="1">Costco</option>
                                            <option value="2">Walmart</option>
                                            <option value="3">Samborns</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="input-field col s6">
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Seleccione Actor</option>
                                            <option value="1">Huck Jackman</option>
                                            <option value="2">Leonardo Di Caprio</option>
                                            <option value="3">Ben Affleck</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="input-field col s6">
                                    <div class="col s12">
                                        <button class="btn blue">Guardar</button>
                                    </div>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../../resources/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../resources/Alejandro/js/materialize.min.js"></script> 
<script type="text/javascript" src="../../../resources/Alejandro/js/dashboard.js"></script>
<script type="text/javascript" src="../../../resources/Alejandro/js/select.js"></script> 
</body>
</html>

