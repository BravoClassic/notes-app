<?php
session_start();
include_once 'db.inc.php';
include 'functions.inc.php';


// code...
$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

if (!empty($fname) || !empty($lname) || !empty($email) || !empty($pwd)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (!empty($pwd)) {
      if(!emailExists($conn, $email)) {
        register($conn, $fname, $lname, $email, $pwd);
      }else{
        echo 'Email already exists! Register with a new email.';
      }
    } else {
      echo "Enter a password!";
    }
  } else {
    echo "Enter a valid email address!";
  }
} else {
  echo "Empty field(s). Enter valid data!";
}
