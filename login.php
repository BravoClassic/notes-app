<?php
if (isset($_SESSION["userId"])) {
  // code...
  header("location: index.php");
  exit();
}

include 'header.php';?>

<form class="form" action="inc/register.inc.php" method="post">
  <input type="email" name="email" value="" placeholder="Enter email address">
  <input type="password" name="password" value="" placeholder="Enter password">
  <input type="submit" name="submit" value="Register">
</form>

<?php include 'footer.php'; ?>
