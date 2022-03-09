<?php
session_start();
// error_reporting(0);
    class User extends DB
    {
       
        public string $fname;
        public string $lname;
        public string $emailfield;
        public string $pass;

        public function __construct($fname, $lname, $emailfield, $pass)
        {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->emailfield = $emailfield;
            $this->pass = $pass;
        }
           /**
            * Add User Function
            *This Function is for SignUp Functinality
            * @return void
            */
        public function addUser(){
            $sql="INSERT INTO User(First_Name,Last_Name,Email_id,User_Password,User_Status,User_Role,User_Address) Values('$this->fname','$this->lname','$this->emailfield','$this->pass','Pending','customer','Chowk')";
            
            try{
               
                DB::getInstance()->exec($sql);
                return "Data Inserted<br>Waiting for Response";
            }
            catch(Exception $e){
               
                return "<h5>Email is Already Registered<br> Please Sign In!!<h5>";
            }
        }
    }

    class Login{


        public function __construct($emailfield, $pass)
        {
         
            $this->emailfield = $emailfield;
            $this->pass = $pass;
        }
            function login()
            {
                  $r = "Wrong Crenditals!!";
      $stmt = DB::getInstance()->prepare("SELECT ID,First_Name,Last_Name,Email_id,User_Password,User_Status,User_Role,User_Address FROM User");   //Fetching Records From DataBase
      $stmt->execute();
      foreach ($stmt->fetchAll() as $user) {
        if (($user["Email_id"] == $this->emailfield) && ($user["User_Password"] == $this->pass) && ($user["User_Status"] == 'Approved') && ($user["User_Role"] == 'customer')) {
          $_SESSION['userdata'] = array("ID" => $user["ID"],"fname" => $user["First_Name"],"lname" => $user["Last_Name"],"email" => $this->emailfield, "password" => $this->pass, "role" => $user["User_Role"],"address"=>$user["User_Address"]);
          header('Location:../view/dashboard.php');
        } else if (($user["Email_id"] == $this->emailfield) && ($user["User_Password"] == $this->pass) && ($user["User_Status"] == 'Pending') && ($user["User_Role"] == 'customer')) {
          $_SESSION['userdata'] = array("ID" => $user["ID"],"fname" => $user["First_Name"],"lname" => $user["Last_Name"],"email" => $this->emailfield, "password" => $this->pass, "role" => $user["User_Role"],"address"=>$user["User_Address"]);
          $r = "User is Not Approved Yet!!";
        } else if (($user["Email_id"] == $this->emailfield) && ($user["User_Password"] == $this->pass) && ($user["User_Status"] == "Approved") && ($user["User_Role"] == "admin")) {
          $_SESSION['userdata'] = array("ID" => $user["ID"],"fname" => $user["First_Name"],"lname" => $user["Last_Name"],"email" => $this->emailfield, "password" => $this->pass, "role" => $user["User_Role"],"address"=>$user["User_Address"]);
          header('Location:dashboard.php');
        } else {
          $r;
        }
      }
      return $r;
    }
        }