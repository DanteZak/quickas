<?php

session_start();

if ( isset( $_GET["email"]) && isset( $_GET["password"]) && $_GET["email"] != "" && $_GET["password"] != "" )
{
    
        $conexion = new mysqli("localhost", "root", "", "quickas");

        $sql = "SELECT * FROM usuarios WHERE usr_email = '" . $_GET["email"] . "' AND usr_password = '" . $_GET["password"] . "'";

        $resultado = $conexion->query($sql);

        if ( $resultado->num_rows == 1 ){

            $usuario = $resultado->fetch_assoc();

            $_SESSION["usuario"] = $usuario["usr_nombre"];

            header("Location: index.php?m=home");
        }
        else
        {
            header("Location: index.php?e=0");
        }

}
else{
    echo "Falta nombre de usuario o contraseña";
}


?>