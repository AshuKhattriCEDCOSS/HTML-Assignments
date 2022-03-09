<?php
session_start();
include("../classes/DB.php");         //Including Classes
include("../config.php");
include("../model/signupdatabase.php");
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $emailfield = $_POST['emailfield'];
  $pass = $_POST['pass'];
  $obj = new User($fname, $lname, $emailfield, $pass);
  $print = ($obj->addUser());
  include("../view/signup.php");   //Calling addUser Function
}

if (isset($_POST['login'])) {
  $emailfield = $_POST['emailfield'];
  $pass = $_POST['pass'];
    $log=new Login($emailfield,$pass);
     $print=$log->login();
     include("../view/login.php");
}

?>
