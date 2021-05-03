<?php
if (isset($_SESSION["userId"])) {
  // code...
  header("location: index.php");
  exit();
}

include 'header.php';?>
<form class="form" id="registerForm" method="post" action="#">
  <input type="text" name="fname" value="" placeholder="Enter First Name">
  <input type="text" name="lname" value="" placeholder="Enter Last Name">
  <input type="email" name="email" value="" placeholder="Enter email address">
  <input type="password" name="password" value="" placeholder="Enter password">
  <input type="password" name="password2" value="" placeholder="Enter password again">
  <input type="submit" name="submit" value="Register">
</form>
<p class="errorMessages" id="err">

</p>
<?php include 'footer.php'; ?>
