<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Notes App</title>
</head>

<body>
  <header class="header-app-nav">
    <nav>
      <div class="brand">
        <!-- <a href="index.php"><img src="assets/logo.png" alt="brand logo"></a> -->
        <span>Menu</span>
      </div>
      <ul class="nav-links">
        <a href="#">
          <li>All Notes</li>
        </a>
        <a href="#">
          <li>Favourites</li>
        </a>
      </ul>
    </nav>
  </header>
  <main class="container">
    <div class="create-view-note ">
      <section class="create-edit-note hidden">
        <form class="create-edit-form" action="#" method="get">
          <input type="text" name="note-title" id="note-title" placeholder="Title of Note">
          <textarea  name="note-content" placeholder="Enter Note" id="note-content"></textarea>
          <input type="submit" value="Create Note">
        </form>
      </section>
      <section class="note-list">
        <form class="search-bar" action="#" method="get">
          <input type="search" name="search" id="searchField">
          <button type="submit">S</button>
        </form>
        <ul class="note-list-items">
          <a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit  amet consectetur adipisicing elit amet  elit....</p><!-- 106wchar-->
            </li>
          </a>
          <a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit  amet consectetur adipisicing elit amet  elit....</p>
            </li>
          </a>
          <a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a><a href="#">
            <li>
              <h1>Title <span></span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit....</p>
            </li>
          </a>
        </ul>
      </section>
    </div>
  </main>