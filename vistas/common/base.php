<?php
    session_start();


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BASE</title>

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d84ee50077eb00012f7593c&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="css/estilo.css">
</head>



<body>

    <?php
        if (isset( $_GET["e"])){
    ?>

    <div class="m-2 alert alert-warning alert-dismissible fade show" role="alert">
        <strong> Usuario y/o contraseña no válidos: </strong> Intente nuevamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
    }
    ?>

    <?php
        if (isset($mostrarHeader) && $mostrarHeader == true) {
            include "vistas/common/header.php";
        }
    ?>
    

    <!--CONTENIDO-->

    <?php include $contenido; ?>

    <script src="vendor/js/jquery-3.4.1.min.js"></script>
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>

</body>

</html>