<nav class="navbar navbar-expand-lg navbar-light bg-light">

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          
                    
           <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                  <a class="dropdown-item" href="index.php">Todas</a>

                  <?php
                    $conexion = new mysqli("localhost", "root", "", "quickas");
                    $sql = "SELECT * FROM categorias ORDER BY cat_nombre";
                    $categorias = $conexion->query($sql);
                    foreach ($categorias as $categoria) {
                  ?>
                    <a class="dropdown-item" href="index.php?cat_id=<?=$categoria['cat_id']?>"><?=$categoria["cat_nombre"]?></a>
                  <?php
                    }
                  ?>


                </div>
              </li>
            </ul>


            
            </div>



              
      </nav>