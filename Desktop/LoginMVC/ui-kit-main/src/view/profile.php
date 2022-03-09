<?php
// include("classes/DB.php");
// include("classes/User.php");
// include("config.php");
// session_start();
// if (isset($_SESSION['cart'])) {
//   header('Location:checkout.php');
// }
// $e = $_SESSION['userdata']['email'];
// $stmt = DB::getInstance()->prepare("SELECT First_Name,Last_Name,Email_id,User_Password FROM User Where Email_id='$e'");
// $stmt->execute();
// foreach ($stmt->fetchAll() as $user) {
//   $fname = $user['First_Name'];
//   $lname = $user['Last_Name'];
//   $email = $user['Email_id'];
//   $pass = $user['User_Password'];
// }
// if (isset($_POST['submit'])) {
//   $fname = $_POST['fname'];
//   $lname = $_POST['lname'];
//   $email = $_POST['emailfield'];
//   $pass = $_POST['pass'];
//   $stmt = DB::getInstance()->prepare("UPDATE User SET First_Name='$fname', Last_Name='$lname', Email_id='$email' , User_Password='$pass' WHERE  Email_id='$e' ");
//   $stmt->execute();
//   echo "<h2>Record Updated Check Data Base</h2>";
// }
// if (isset($_POST['signout'])) {
//   session_destroy();
// }
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
  </style>


  <!-- Custom styles for this template -->
  <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php">Dashboard</a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="myorders.php">My Orders</a>
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
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <h2>My Profile</h2>

      </main>
    </div>
    <main class="form-signin">
      <form method="POST" action="profile.php">


        <div class="form-floating">
          <input type="text" required class="form-control" id="floatingInput" name="fname" placeholder="name@example.com" value=<?php echo $fname ?>>
          <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating">
          <input type="text" required class="form-control" id="floatingInput" name="lname" placeholder="name@example.com" value=<?php echo  $lname ?>>
          <label for="floatingInput">Last Name</label>
        </div>

        <div class="form-floating">
          <input type="email" required class="form-control" id="floatingInput" name="emailfield" placeholder="name@example.com" value=<?php echo  $email ?>>
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="text" required class="form-control" id="floatingPassword" name="pass" placeholder="Password" value=<?php echo  $pass ?>>
          <label for="floatingPassword">Password</label>
        </div>


        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Update">
        <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>

      </form>
    </main>
  </div>



  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>