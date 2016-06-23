<?php
  function mostraAlertaNav($tipo){
    if (isset($_SESSION[$tipo])) {
      ?>

      <li class="nav-item">
        <a href="#" class="white-text nav-link"><?=$_SESSION[$tipo]?></a>
      </li>

      <?php
      unset($_SESSION[$tipo]);
    }
  }
  function mostraAlerta($tipo){
    if (isset($_SESSION[$tipo])) {
      ?>

      <div class="row">
        <div class="text-md-center">
          <p class="text-success"><?=$_SESSION[$tipo]?></p>
        </div>
      </div>

      <?php
      unset($_SESSION[$tipo]);
    }
  }
?>
