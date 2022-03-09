<?php
session_start();
include("classes/DB.php");         //Including Classes
include("classes/User.php");
include("config.php");


if (isset($_POST['searchbutton'])) {
  $value = $_POST['search'];
  $d = $_POST['select'];

  if ($value == "") {
    $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product ORDER BY $d");   //Fetching Records From DataBase
    $stmt->execute();
  } else if ($value != "" && $d != "Sort By") {
    $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product WHERE ID='$value' OR P_Name='$value' OR P_Category='$value'  ORDER BY $d ");   //Fetching Records From DataBase
    $stmt->execute();
  } else {
    $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product WHERE ID='$value' OR P_Name='$value' OR P_Category='$value'");   //Fetching Records From DataBase
    $stmt->execute();
  }
} else if (isset($_POST['Page2'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2 OFFSET 2");   //Fetching Records From DataBase
  $stmt->execute();
  $prev = '<li class="page-item"><input type="submit" name="Page2Prev" class="page-link" value="Previous"></li>';
  $next = ' <li class="page-item"><input type="submit" name="Page2Next" class="page-link" value="Next"></li>';
} else if (isset($_POST['Page3'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2 OFFSET 4");   //Fetching Records From DataBase
  $stmt->execute();
  $prev = '<li class="page-item"><input type="submit" name="Page3Prev" class="page-link" value="Previous"></li>';
} else {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2");   //Fetching Records From DataBase
  $stmt->execute();
  $next = ' <li class="page-item"><input type="submit" name="Page1Next" class="page-link" value="Next"></li>';
}
if (isset($_POST['showall'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product");   //Fetching Records From DataBase
  $stmt->execute();
}
if (isset($_POST['Page1Next'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2 OFFSET 2");   //Fetching Records From DataBase
  $stmt->execute();
  $prev = '<li class="page-item"><input type="submit" name="Page2Prev" class="page-link" value="Previous"></li>';
  $next = ' <li class="page-item"><input type="submit" name="Page2Next" class="page-link" value="Next"></li>';
}
if (isset($_POST['Page2Prev'])) {

  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2");   //Fetching Records From DataBase
  $stmt->execute();
  $next = ' <li class="page-item"><input type="submit" name="Page1Next" class="page-link" value="Next"></li>';
}
if (isset($_POST['Page2Next'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2 OFFSET 4");   //Fetching Records From DataBase
  $stmt->execute();
  $prev = '<li class="page-item"><input type="submit" name="Page3Prev" class="page-link" value="Previous"></li>';
  $next = '';
}

if (isset($_POST['Page3Prev'])) {
  $stmt = DB::getInstance()->prepare("SELECT ID,P_Name,P_Category,P_Price,P_Image FROM Product LIMIT 2 OFFSET 2");   //Fetching Records From DataBase
  $stmt->execute();
  $prev = '<li class="page-item"><input type="submit" name="Page2Prev" class="page-link" value="Previous"></li>';
  $next = ' <li class="page-item"><input type="submit" name="Page2Next" class="page-link" value="Next"></li>';
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Home · Bootstrap v5.1</title>


  <!-- Bootstrap core CSS -->
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
      width: 70%;
      height: 225px;

    }
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Cart</h4>
            <p class="text-muted">Cart is empty now.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>Shop</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">My Shop</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Shop Now</a>
          <form method="POST" action="cart.php"><input type="submit" name="view" class="btn btn-secondary my-2" value='View Cart'></form>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container overflow-hidden">
        <form class="row row-cols-lg-auto align-items-center mt-0 mb-3" method="POST">
          <div class="col-lg-6 col-12">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
            <div class="input-group">
              <input type="text" name="search" class="form-control" id="inlineFormInputGroupUsername" placeholder="Product, SKU, Category" value=<?php $value ?>>
            </div>
          </div>

          <div class="col-lg-3 col-12">
            <label class="visually-hidden" for="inlineFormSelectPref">Sort By</label>
            <select class="form-select" name="select" id="inlineFormSelectPref">
              <option selected>Sort By</option>
              <option value="P_Price">Price</option>
              <option value="P_Name">Name</option>
              <option value="P_Category">Category</option>
            </select>
          </div>

          <div class="col-lg-3 col-12">
            <input type="submit" class="btn btn-primary w-100" name="searchbutton" value="Search">
          </div>
        </form>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php

          foreach ($stmt->fetchAll() as $product) {
            $a .= ('<div class="col">
            <div class="card shadow-sm">
              <img class="card-img-top setimg" src=' . $product['P_Image'] . ' alt="Card image">
              <div class="card-body">
                  <h5>' . $product['P_Name'] . '</h5>
                  <p class="card-text">' . $product['P_Category'] . '</p>
                <div class="d-flex justify-content-between align-items-center">
                  <p><strong>Rs' . $product['P_Price'] . '</strong>&nbsp;</p>
                  <form method="POST" action="single-product.php">
                   <input type="hidden" name="item" value=' . $product['ID'] . '>
                   <input type="submit" name="detail" value="More Details-->" class="btn btn-danger"/>
                    </form>
                    <form method="POST" action="cart.php">
                    <input type="hidden" name="cartval" value=' . $product['ID'] . '>
                  <input type="submit" name="Add" class="btn btn-primary" value="Add To Cart">
                  </form>
                </div>
              </div>
            </div>
          </div>');
          }
          echo $a;
          ?>
          <div class="col">
            <form method="POST">
              <nav aria-label="Page navigation example">
                <ul class="pagination">

                  <?php echo $prev ?>
                  <li class="page-item"><input type="submit" class="page-link" value="1" name="Page1"></li>
                  <li class="page-item"><input type="submit" class="page-link" value="2" name="Page2"></li>
                  <li class="page-item"><input type="submit" class="page-link" value="3" name="Page3"></li>
                  <?php echo $next ?>
                </ul>
              </nav>
              <input type="submit" class="btn btn-danger" name="showall" value="Show All Products">
            </form>
          </div>

        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">&copy; CEDCOSS Technologies</p>
    </div>
  </footer>


  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>