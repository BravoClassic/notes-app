<?php include 'header.php'; ?>

  
  <main class="container">
    <div class="create-view-note ">
      <section class="create-edit-note hidden">
        <form class="create-edit-form" name="create-edit-form">
          <input type="text" name="note-id" class="hidden" placeholder="id of Note" disabled>
          <input type="text" name="note-title" id="note-title" placeholder="Title of Note">
          <textarea  name="note-content" placeholder="Enter Note" id="note-content"></textarea>
          <span>
          <label for="fav">Favorite</label>
          <input type="checkbox" name="fav" id="fav">
          </span>
          <input type="submit" class="create-edit-btn"value="Create Note">
        </form>
      </section>
      <section class="note-list">
        <form class="search-bar" action="#" method="get">
          <input type="search" name="search" id="searchField">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul class="note-list-items">
          <!-- <a href="#">
            <li>
              <h1>Title <span><i class="fa-regular fa-heart"></i></span><span><i class="fa-solid fa-trash"></i></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit  amet consectetur adipisicing elit amet  elit....</p>
            </li>
          </a> -->
          <!-- 106wchar-->
          loading..
        </ul>
      </section>
    </div>
    <a href="#" class="create-btn"><i class="fa fa-plus"></i></a>
  </main>
  <div class="modal-overlay">
  <span class="close">close</span>
  <div class="modal">
    <div class="display-details">
      <span class="edit">edit</span>
      <h1>Name: <?php echo $_SESSION['fullname'];?></h1>
      <h3>Email: <?php echo $_SESSION['email'];?></h3>
      <h3>Password: ***</h3>
      <p>Joined: <?php echo $_SESSION['datejoined']?></p>
    </div>
    <div class="edit-details hidden">
    <span class="cancel">cancel</span>
    <form class="register profile">
        <div class="name-input">
          <input type="text" name="fname" id="fname" placeholder="First Name">
          <input type="text" name="lname" id="lname" placeholder="Last Name">
        </div>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="pwd" id="pwd" placeholder="Password">
        <input type="submit" id="regSubmit" value="Update">
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
