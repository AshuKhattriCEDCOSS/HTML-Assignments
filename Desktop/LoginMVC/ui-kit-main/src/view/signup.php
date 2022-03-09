<?php
// if (isset($_POST['submit'])) {
//   include("classes/DB.php");     //Including Classes
//   include("classes/User.php");
//   include("config.php");
//   $fname = $_POST['fname'];
//   $lname = $_POST['lname'];
//   $emailfield = $_POST['emailfield'];
//   $pass = $_POST['pass'];
//   $obj = new User($fname, $lname, $emailfield, $pass);

//   $print = ($obj->addUser());   //Calling addUser Function
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
  <title>Signin Template · Bootstrap v5.1</title>

  <!-- Bootstrap core CSS -->
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


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

  <!-- HTML SECTION-->

  <!-- Custom styles for this template -->
  <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="../controller/actions.php">
      <h1 class="h3 mb-3 fw-normal">Sign up</h1>

      <div class="form-floating">
        <input type="text" required class="form-control" id="floatingInput" name="fname" placeholder="name@example.com">
        <label for="floatingInput">First Name</label>
      </div>
      <div class="form-floating">
        <input type="text" required class="form-control" id="floatingInput" name="lname" placeholder="name@example.com">
        <label for="floatingInput">Last Name</label>
      </div>

      <div class="form-floating">
        <input type="email" required class="form-control" id="floatingInput" name="emailfield" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" required class="form-control" id="floatingPassword" name="pass" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>


      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> -->
      <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Sign Up">
      <div>
        <p class="mb-0">Don't have an account? <a href="login.php">Sign In</a></p>
      </div>
      <?php echo $print ?>
      <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>
    </form>
  </main>



</body>

</html>