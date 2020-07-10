<?php 
    session_start(); 

    if ( isset($_POST ['deconnetion']) ) {
        session_destroy() ;
        header('location: index.php') ; 
    } 
?>
<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand">Robot</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="produit.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="article.php"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding:0px" method="POST">
        <?php if ( isset($_SESSION ['matricule']) ) { ?>
              <input type="submit" name="deconnetion" class="btn btn-outline-info my-2 my-sm-0" value="Deconnection"> &nbsp;&nbsp;&nbsp;
        <?php } else { ?>
            <a href="./index.php" class="btn btn-outline-info my-2 my-sm-0">Connection</a> &nbsp;&nbsp;&nbsp;
            <a href="./inscription.php" class="btn btn-outline-success my-2 my-sm-0">Inscription</a>
        <?php } ?>
    </form>
  </div>
</nav>