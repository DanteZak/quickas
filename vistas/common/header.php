<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flat Social Icons,icon hover effects,,Elements"./>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<link href='iconos.css' rel='stylesheet' type='text/css'>
	
</head>

<header>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="70" height="60" alt="">
    </a>

    <form class="form-inline">
        <input name="busqueda" class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0 mr-2" type="submit">Buscar</button>

  <div>
    </form>

      <?php

      if ( isset( $_SESSION["usuario"] ) ){

      ?>

        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION["usuario"]; ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Mi cuenta</a>
                <a class="dropdown-item" href="index.php?m=logout">Cerrar sesión</a>
 
            </div>
        </div>
        
      <?php
      }
      else{
      ?>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
            Registro/Iniciar sesión
        </button>

      <?php
      }
      ?>


    </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="index.php">

        <input type="hidden" name="m" value="login">

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@outlook.com">

    <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
   
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="La contraseña debe tener entre 6 y 20 caracteres">

  </div>
  <div>
    <a href="">Olvidaste tu contraseña?</a>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
  </div>
  <div class="text-center">

      <p>Aún no eres miembro?
      <a href="index.php?m=registro">Registrate</a>
      </p>

    </div>

    <input class="btn btn-danger" type="submit" value="Ingresar">
</form>
      </div>

    </div>
  </div>
</div>
</div>