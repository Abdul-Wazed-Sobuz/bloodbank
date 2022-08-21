<?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a style="color:red;font-size:2rem;" class="navbar-brand" href="../admin/admindash.php">BdDoner.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mx-auto">


      <li class="nav-item dropdown">

      </li>
    </ul>
    <span class="navbar-text p-3">
    <i class="fa-solid fa-circle-user" style="color:black;font-size:16pt;"></i>
      <?php
      if (!empty($_SESSION['user'])) {
        echo "Welcome, " . $_SESSION['user'];
      }
      ?>
    </span>
    <span class="navbar-text">
      <a class="navbar-text" href="../../controller/logout.php"><i class="fa-solid fa-right-from-bracket" style="color:black;font-size:18pt"></i></a>
    </span>
  </div>
</nav>