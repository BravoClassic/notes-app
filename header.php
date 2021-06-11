<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
  </head>
  <body>
  
  <?php
  if(isset($_SESSION['id'])) :?>
     <header class="header-app-nav">
    <nav>
      <div class="brand">
        <a href="app.php"><img src="assets/logo.png" alt="brand logo"></a>
        <!-- <a href="#">
          <span>Menu</span>
        </a> -->
      </div>
      <ul class="nav-links">
      <a href="#">
          <li>Profile</li>
        </a>
        <a href="#">
          <li>All Notes</li>
        </a>
        <a href="#">
          <li>Favourites</li>
        </a>
        <a href="#">
          <li>Log out</li>
        </a>
      </ul>
    </nav>
  </header>
<?php else :?>
  <header class="header-content">
      <nav>
        <div class="brand">
          <a href="index.php"><img src="assets/logo.png" alt="brand logo"></a>
        </div>
        <ul>
          <a href="#">
            <li>Home</li>
          </a>
          <a href="#" class="regLog">
            <li>Login/Register</li>
          </a>
        </ul>
      </nav>
    </header>

  <?php endif;?>