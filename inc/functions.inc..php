<?php
function register($conn,$fname,$lname,$email,$password)
{
  // code...
  $sql = "INSERT INTO notes_users (firstName, lastName, email, password) VALUES (?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt,$sql)) {
   header("location: ../register.php?error=stmtfailed");
   exit();
  }


  $hashPass =password_hash($password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt,"ssss",$username, $firstname,$lastname,$email);


  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../register.php?error=none");
  exit();
}
