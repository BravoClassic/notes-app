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
<?php include 'footer.php'; ?>
