<?php include 'header.php'; ?>
<main class="main-content">
  <div class="right-main">
    <h1>Online Notes App</h1>
    <h3>Create your notes!</h3>
    <a href="#" class="regLog1">Register/Login</a>
  </div>
</main>
<div class="modal-overlay">
  <span>close</span>
  <div class="modal">
    <div class="form-options">
      <button class="register-btn active">Register</button>
      <button class="login-btn">Login</button>
    </div>
    <div class="form-container" method="post">
      <form action="#" method="post" class="login" style="display: none;">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="pwd" id="pwd" placeholder="Password">
        <input type="submit" value="Login">
        <a href="#">Forgot Password?</a>
      </form>
      <form action="#" method="post" class="register">
        <div class="name-input">
          <input type="text" name="fname" id="fname" placeholder="First Name">
          <input type="text" name="lname" id="lname" placeholder="Last Name">
        </div>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="pwd" id="pwd" placeholder="Password">
        <input type="submit" value="Register">
      </form>
      <div class="error">
        Bruh error here!!
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>