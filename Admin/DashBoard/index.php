<!DOCTYPE html>
<html>

<head>
  <link href="../../resources/Alejandro/css/material_icons.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../resources/Alejandro/DashBoard/css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webstats | Admin Page</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
</head>


<body class="grey lighten-3">

  <!-- NAVIGATION -->
  <nav class="blue darken-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">WebStats</a>
        <a href="#" data-activates="side-nav" class="button-collapse show-on-small left">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li class="active">
            <a href="#">Dashboard</a>
          </li>
          <li>
            <a href="#">Users</a>
          </li>
          <li>
            <a href="#">Posts</a>
          </li>
          <li>
            <a href="#">Comments</a>
          </li>
          <li>
            <a href="#">Reports</a>
          </li>
          <a href="#" class="btn large white red-text">
            <strong>LOG OUT</strong>
          </a>
        </ul>
        <!-- SIDE NAV -->
        <ul id="side-nav" class="side-nav">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="img/user-background.jpeg" alt="Side navigation background">
              </div>
              <a href="#">
                <img src="img/person2.jpg" alt="Admin avatar" class="circle">
              </a>
              <a href="#">
                <span class="name white-text">John Doe</span>
              </a>
              <a href="#">
                <span class="text white-text">Administrator</span>
              </a>
            </div>
          </li>
          <li>
            <a href="#">Dashboard</a>
          </li>
          <li>
            <a href="#">Users</a>
          </li>
          <li>
            <a href="#">Posts</a>
          </li>
          <li>
            <a href="#">Comments</a>
          </li>
          <li>
            <a href="#">Reports</a>
          </li>
          <a href="#" class="btn large white red-text">
            <strong>LOG OUT</strong>
          </a>
        </ul>
      </div>
    </div>
  </nav>

<?php $count = (int)10; ?>
  <!-- Dashboard -->
  <section class="section section-daily-stats center">
    <div class="row">
      <div class="col l3 m6 s12">
        <div class="card-panel blue white-text center">
          <i class="material-icons medium">show_chart</i>
          <h5>Compras Realizadas</h5>
          <h3 class="count">10</h3>
          <div class="progress white lighten-1">
            <div class="determinate red" style="width: 23%"></div>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel blue white-text center">
          <i class="material-icons medium">person_add</i>
          <h5>New Users</h5>
          <h3 class="count">1203</h3>
          <div class="progress white ">
            <div class="determinate red lighten-1" style="width:13%;"></div>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel blue lighten-1 white-text center">
          <i class="material-icons medium">assignment</i>
          <h5>New Posts</h5>
          <h3 class="count">2867</h3>
          <div class="progress white">
            <div class="determinate  red" style="width:80%;"></div>
          </div>
        </div>
      </div>
      <div class="col l3 m6 s12">
        <div class="card-panel red lighten-5 center">
          <i class="material-icons medium">comment</i>
          <h5>New Comments</h5>
          <h3 class="count">6931</h3>
          <div class="progress grey lighten-1">
            <div class="determinate red lighten-1" style="width:50%;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- GRAPH FOR MONTHLY VISITORS AND PENDING POSTS -->
  <section class="section section-visitors-posts">
    <div class="row">
      <!-- GRAPH -->
      <div class="col l8 m6 s12">
        <div class="card-panel">
          <div id="usersChart" style="height:370px; width:100%;"></div>
        </div>
      </div>
      <!-- PENDING POSTS -->
      <div class="col l4 m6 s12">
        <ul class="collection with-header pending-posts">
          <li class="collection-header">
            <h5>Posts Waiting For Approval</h5>
          </li>
          <li class="collection-item avatar">
            <img src="img/person1.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Jane Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view blue-text">View</a> |
            <a href="#" class="approve green-text">Approve</a> |
            <a href="#" class="deny red-text">Deny</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person2.jpg" alt="Avatar 1" class="circle">
            <span class="title">Alan Taylor</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view blue-text">View</a> |
            <a href="#" class="approve green-text">Approve</a> |
            <a href="#" class="deny red-text">Deny</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view blue-text">View</a> |
            <a href="#" class="approve green-text">Approve</a> |
            <a href="#" class="deny red-text">Deny</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view blue-text">View</a> |
            <a href="#" class="approve green-text">Approve</a> |
            <a href="#" class="deny red-text">Deny</a>
          </li>
        </ul>
      </div>
    </div>
  </section>


  <!-- REPORTED USERS AND REVENUE GRAPH -->
  <section class="section section-reports-revenue">
    <div class="row">
      <!-- REPORTED USERS -->
      <div class="col l4 m6 s12">
        <ul class="collection with-header pending-posts">
          <li class="collection-header">
            <h5>Reported users</h5>
          </li>
          <li class="collection-item avatar">
            <img src="img/person1.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Jane Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view-report blue-text">View report</a> |
            <a href="#" class="dismiss-report green-text">Dismiss</a> |
            <a href="#" class="ban-user red-text">Ban</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person2.jpg" alt="Avatar 1" class="circle">
            <span class="title">Alan Taylor</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view-report blue-text">View report</a> |
            <a href="#" class="dismiss-report green-text">Dismiss</a> |
            <a href="#" class="ban-user red-text">Ban</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view-report blue-text">View report</a> |
            <a href="#" class="dismiss-report green-text">Dismiss</a> |
            <a href="#" class="ban-user red-text">Ban</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="view-report blue-text">View report</a> |
            <a href="#" class="dismiss-report green-text">Dismiss</a> |
            <a href="#" class="ban-user red-text">Ban</a>
          </li>
        </ul>
      </div>
      <!-- REVENUE -->
      <div class="col l8 m6 s12">
        <div class="card-panel">
          <div id="revenueChart" style="height:370px; width:100%;"></div>
        </div>
      </div>
    </div>
  </section>


  <!-- INBOX AND TODO LIST -->
  <section class="section secion-inbox-todo">
    <div class="row">
      <div class="col l6 m6 s12">
        <ul class="collection with-header inbox">
          <li class="collection-header">
            <h5>Inbox</h5>
          </li>
          <li class="collection-item avatar">
            <img src="img/person1.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Jane Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="read-message blue-text">Read</a> |
            <a href="#" class="delete-message red-text">Delete</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person2.jpg" alt="Avatar 1" class="circle">
            <span class="title">Alan Taylor</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="read-message blue-text">Read</a> |
            <a href="#" class="delete-message red-text">Delete</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="read-message blue-text">Read</a> |
            <a href="#" class="delete-message red-text">Delete</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="read-message blue-text">Read</a> |
            <a href="#" class="delete-message red-text">Delete</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpeg" alt="Avatar 1" class="circle">
            <span class="title">Susan Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero sunt non error animi quibusdam velit eos
              ut soluta blanditiis, et eius minima repellat nostrum, in perferendis porro? Rerum, voluptate.</p>
            <a href="#" class="read-message blue-text">Read</a> |
            <a href="#" class="delete-message red-text">Delete</a>
          </li>
        </ul>
      </div>
      <div class="col l6 m6 s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Todo List</span>
            <form id="todo-form">
              <div class="input-field">
                <input type="text" id="todo" placeholder="Add Task...">
              </div>
            </form>
            <ul class="collection todos">
              <li class="collection-item">
                <div>Todo One
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>
              <li class="collection-item">
                <div>Todo Two
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>
              <li class="collection-item">
                <div>Todo Three
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>
              <li class="collection-item">
                <div>Todo Four
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>
              <li class="collection-item">
                <div>Todo Five
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOOTER -->
  <footer class="section red darken-2 white-text center">
    <p>WebStats Copyright &copy; 2018</p>
  </footer>


  <!-- FAB -->
  


  <!-- ANNOUCNMENT MODAL -->
  <div id="modal-announcment" class="modal">
    <div class="modal-content">
      <h4>Add Announcment</h4>
      <form>
        <div class="input-field">
          <input type="text" id="title">
          <label for="title">Title</label>
        </div>
        <div class="input-field">
          <select>
            <option value="" selected disabled>Select Option</option>
            <option value="1">General announcment</option>
            <option value="2">News</option>
            <option value="3">Promotions</option>
            <option value="4">Other</option>
          </select>
          <label>Category</label>
        </div>
        <div class="input-field">
          <textarea name="body" id="body" class="materialize-textarea"></textarea>
          <label for="body"></label>
        </div>
      </form>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn yellow darken-3 black-text">Submit</a>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../../resources/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../../resources/Alejandro/js/materialize.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  <script src="js/charts.js"></script>
  <script>

    // HIDE EVERYTHING ON OPEN
    $(".section").hide();
    setTimeout(() => {
      $(document).ready(() => {

        // SHOW HIDDEN SECTIONS
        $(".section").fadeIn();

        // PRELOADER
       

        // SIDE DRAWER
        $(".button-collapse").sideNav();

        // MODAL
        $(".modal").modal();

        // SELECT
        $(".select").material_select();

        // COUNTER - Animates the Daily Stats section
        $(".count").each(function () {
          $(this).prop("Counter", 0).animate({
            Counter: $(this).text()
          }, {
              duration: 1000,
              easing: "swing",
              step: function (now) {
                $(this).text(Math.ceil(now));
              }
            });
        });

        // PENDING POSTS
        $(".view").click(function (e) {
          Materialize.toast("Here is the comment", 3000);
          e.preventDefault();
        });

        $(".approve").click(function (e) {
          Materialize.toast("Comment Approved", 3000);
          e.preventDefault();
        });
        $(".deny").click(function (e) {
          Materialize.toast("Comment Denied", 3000);
          e.preventDefault();
        });

        // USER REPORTS
        $(".view-report").click(function (e) {
          Materialize.toast("Here is the report", 3000);
          e.preventDefault();
        });

        $(".dismiss-report").click(function (e) {
          Materialize.toast("Report dismissed", 3000);
          e.preventDefault();
        });

        $(".ban-user").click(function (e) {
          Materialize.toast("User banned!", 3000);
          e.preventDefault();
        });

        // INBOX
        $(".read-message").click(function (e) {
          Materialize.toast("Here is your message", 3000);
          e.preventDefault();
        });

        $(".delete-message").click(function (e) {
          Materialize.toast("Message deleted!", 3000);
          e.preventDefault();
        });

        // TODO LIST
        $("#todo-form").submit(function (e) {
          const output = `
          <li class="collection-item">
                <div>${$("#todo").val()}
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons red-text">close</i>
                  </a>
                </div>
              </li>`;
          $(".todos").append(output);
          Materialize.toast("Todo Added", 3000);
          e.preventDefault();
        });

        // DELETE TODO ITEM
        $(".todos").on("click", ".delete", function (e) {
          $(this).parent().parent().remove();
          Materialize.toast("Todo Removed", 3000);
          e.preventDefault();
        });

        CKEDITOR.replace("body");


      });
    }, 1000);

  </script>
</body>