<?php
// session_start();
// include("classes/DB.php");         //Including Classes
// include("classes/User.php");
// include("config.php");
// if (!isset($_SESSION['userdata'])) {

//   header('Location:login.php');
// } else {
//   $stmt = DB::getInstance()->prepare("SELECT ID, First_Name, Last_Name, Email_id, User_Status FROM User WHERE User_Role='customer' LIMIT 3");   //Fetching Records From DataBase
//   $stmt->execute();
//   // die(json_encode($stmt->fetchAll()));
//   $ss = array();
//   foreach ($stmt->fetchAll() as $user) {
//     array_push($ss, "<tr><td>" . $user['ID'] . "</td><td>" . $user['First_Name'] . "</td><td>" . $user['Last_Name'] . "</td><td>" . $user['Email_id'] . "</td><td>" . $user['User_Status'] . "</td></tr>");
//   }
//   if (isset($_POST['signout'])) {
//     session_destroy();
//   }
?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .setimg {
      width: 100%;
      height: 225px;

    }
    </style>


    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Blog Page</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" name="signout" href="login.php">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">
                  <span data-feather="home"></span>
                  Main Page
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
          <h2>Various Blogs</h2>
          <div class="col-5">
            <div class="card shadow-sm">
              <img class="card-img-top setimg" src="pic.jpg"  alt="Card image">
              <div class="card-body">
                  <h5>Hello</h5>
                  <p class="card-text">First Blog</p>
                <div class="d-flex justify-content-between align-items-center">
                  <p><strong>Read Now for Rs500</strong>&nbsp;</p>
                  <form method="POST" action="single-product.php">
                   <input type="hidden" name="item" value=>
                   <input type="submit" name="detail" value="More Details-->" class="btn btn-danger"/>
                    </form>
                    <form method="POST" action="cart.php">
                    <input type="hidden" name="cartval" value=>
                  <input type="submit" name="Add" class="btn btn-primary" value="Delete">
                  </form>
                </div>
              </div>
            </div>
          </div>
        
        </main>
      </div>
    </div>


    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  </html>
