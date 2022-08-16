
<?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a style="color:red;font-size:2rem;" class="navbar-brand" href="#">BdDoner.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mx-auto">
        

        <li class="nav-item dropdown">
        
      </li>
      </ul>
      <span class="navbar-text">
        <?php 
          if(!empty($_SESSION['user'])){
            echo "Welcom, ".$_SESSION['user'];
          }
        ?>
        
      </span>
    </div>
  </nav>