<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>

<body>
    <?php
        $conexion = new mysqli("localhost", "root", "", "formulariobd");

        $sql = "SELECT * FROM usuarios WHERE usr_id = " . $_GET["id_usr"];
        
        $perfiles = $conexion->query($sql);  

        foreach ( $perfiles as $perfil) {
        ?>
                <!-- LINEA 15: EJECUTA LA FUNCION-->
            <ul>
                <li>Email: <?= echo $perfil["usr_email"] ?> </li>
                <li></li>
            </ul>

            <img src="usr_archivos/<?= echo $perfil["usr_foto"] ?>" alt="">

    <?php
        }
    ?> 

</body>

</html>