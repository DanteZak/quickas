<?php
  if ( isset( $_SESSION["usuario"]) ){
    header("Location: index.php?m=home");
  }
  
                     
  if(isset($_GET['btn_registro'])){
    $conexion = new mysqli("localhost", "root", "", "quickas");
    $usuarios = "usuarios";
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    $conexion->query("INSERT INTO $usuarios (usr_nombre, usr_email, usr_password) values ('$nombre','$email','$password')"); 
    
    if($conexion == 1){
      header("location: index.php?m=0");
    }
    }
  ?>

    <div class="container-fluid">

            <div class="row">

      <!------------------------REGISTRO!!------------------------------------------->
              
                <div class="col-7 mt-2 " >

                    <h1 class="text-center display-4 font-weight-bold">Registrate!</h1>

                    <form class="mt-4" action="index.php">

                        <input type="text" class="form-control" placeholder="Nombre" name=nombre>
                        <input type="email" class="form-control mt-2" placeholder="Email" name=email>
                        <input type="password" class="form-control mt-2" placeholder="Contraseña" name=password>
                        
                      

                        <button type="submit"  class="btn btn-danger my-3" name="btn_registro">Registrarse</button>
                    </form>
                </div>
              </div>