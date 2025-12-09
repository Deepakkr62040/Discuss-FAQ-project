<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bar">
  <div class="container">
    <div class="logo">
      <a class="navbar-brand logo-item" href="./">
        <img src="./public/question-mark.png" width="35" height="35">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php
          if(isset($_SESSION['user']['username'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="./server/requests.php?logout=true">LogOut(<?php echo ucfirst($_SESSION['user']['username'])?>)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?ask=true">Ask A Questions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']?>">My Questions</a>
            </li>
          <?php } ?>

        <?php
        if(!isset($_SESSION['user']['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Questions">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>