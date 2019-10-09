<?php include "vistas/common/navbar.php";?>

<!--Slider-->
<div class="bd-example mb-5 mt-3">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/dia3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/dia.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/dia2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>

<!--Cards-->

<?php
  $conexion = new mysqli("localhost", "root", "", "quickas");

  $sql = "SELECT * FROM publicaciones";

  if( isset($_GET["cat_id"])){
    $sql .= " WHERE cat_id =" . $_GET["cat_id"];
  }
  else
    if( isset( $_GET["busqueda"])){
      $sql .= " WHERE pub_titulo LIKE '%" . $_GET["busqueda"] . "%'";
    }

  $publicaciones = $conexion->query($sql);

  $contadorTarjetas = 0;

  foreach ($publicaciones as $publicacion) {
    if ($contadorTarjetas == 0){
  ?>
  
    <div id="margencito" class="card mb-3 mx-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="usr_archivos/<?= $publicacion["pub_imagen"]  ?>" class="card-img float" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?=  $publicacion["pub_titulo"] ?></h5>
            <p class="card-text"><?=  $publicacion["pub_descripcion"] ?></p>
            <p class="card-text"><small class="text-muted">$ <?=  $publicacion["pub_precio"] ?></small></p>


          <form action="" method="post">
          
            <button class="btn btn-success"
            name="btnAccion"
            value="agregar"
            type="sumbit">
              Añadir al carrito
            </button>

          </form>

          </div>
        </div>
      </div>
    </div>

  <?php
      $contadorTarjetas++;
    }
    else{
      if ( $contadorTarjetas == 1 ){
        echo '<div id="margencito" class="card-deck">';
      }
  ?>

      <div class="card">
        <img src="usr_archivos/<?= $publicacion["pub_imagen"]  ?>" class="card-img-top float tamaño-tarjetas" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=  $publicacion["pub_titulo"] ?></h5>
          <p class="card-text"><?=  $publicacion["pub_descripcion"] ?></p>
          <p class="card-text"><small class="text-muted">$ <?=  $publicacion["pub_precio"] ?></small></p>
          <a href="#" class="btn btn-success">Añadir al carrito</a>
        </div>
      </div>

  <?php
      if ( $contadorTarjetas == 3){
        $contadorTarjetas = 0;
          echo '</div>'; //Cierro el card-deck
      }
      else{
        $contadorTarjetas++;
      }
    }
  }
   if ( $contadorTarjetas > 1 && $contadorTarjetas < 3){
        echo '</div>'; //Cierro el card-deck
    }
?>

<!--Iconos de redes-->
<footer> <div class="sharethis-inline-share-buttons"></div> </footer>