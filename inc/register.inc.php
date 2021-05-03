<?php

require_once 'db.inc.php';
require_once 'functions.inc.php';

if ($_isset($_POST["submit"])) {
  // code...
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email =$_POST["email"];
  $pwd= $_POST["password"];
  $pwd2 = $_POST["password2"];

  $checkFieldsRegister = emptyInputRegister($fname,$lname,$email,$pwd,$pwd2);
  $validateEmail = invalidEmail($email);
  $pwdNotMatching= pwdNotMatch($pwd,$pwd2);
  $userExists = uidExists($conn,$email);
  if ($checkFieldsRegister) {
    // code...
    header("location: ../register.php?error=emptyFields");
    exit();
  }

  if ($validateEmail) {
    // code...
    header("location: ../register.php?error=invalidEmail");
    exit();
  }

  if ($pwdNotMatching) {
    // code...
    header("location: ../register.php?error=pwdNotMatching");
    exit();
  }
  if ($userExists) {
    // code...
    header("location: ../register.php?error=userExists");
    exit();
  }

  register($conn,$fname,$lname,$email,$pwd);

}
