<?php include 'header.php';?>
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
        <form action="#" method="post">
          <div class="login" style="display: none;">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <input type="submit" value="Login">
          </div>
          <div class="register">
            <div class="name-input">
              <input type="text" name="fname" id="fname" placeholder="First Name">
              <input type="text" name="lname" id="lname" placeholder="Last Name">
            </div>
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <input type="submit" value="Register">
          </div>
          <div class="error">
            Bruh error here!!
          </div>
        </form>
      </div>
    </div>
<?php include 'footer.php';?>
