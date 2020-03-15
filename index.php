<?php
  require "header.php";
?>

      <form method="post" class="form-inline my-2 my-lg-0" action="includes/login.inc.php">
          <input id="username" name="username" type="text" class="form-control mr-sm-2" placeholder="Username">
          <input id="password" name="password" type="password" class="form-control mr-sm-2" placeholder="Password">
          <input name="login-btn" type="submit" class="btn btn-outline-light my-2 my-sm-0 button" value="Log in">
      </form>
    </div>
  </nav>

<main>
  <div class="container">
    <h1>Expert en gérontechnologie</h1>
    <br>
    <p>Conseils sur les innovations qui facilitent le maintien à domicile</p>
  </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 image-resize" src="img/nutrition.png" alt="Nutrition">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 image-resize" src="img/health.png" alt="Health">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 image-resize" src="img/communication.png" alt="Communication">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 image-resize" src="img/security.png" alt="Security">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 image-resize" src="img/wellbeing.png" alt="Wellbeing">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
</main>
