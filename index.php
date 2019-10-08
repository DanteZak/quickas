<?php

    $modulo = "index";

    if (isset($_GET["m"]))
    {
        switch( $_GET["m"]) {
            case "home":
                $modulo = "index";
                break;

            case "favoritos":
                $modulo = "favoritos";
                break;

            case "historial":
                $modulo = "historial";
                break;

            case "pago":
                $modulo = "pago";
                break;

            case "publicar":
                $modulo = "publicar";
                break;

            case "registro":
                $modulo = "registro";
                break;

            case "login":
                $modulo = "login";
                break;

            case "logout":
                $modulo = "logout";
                break;
                
            case "prueba":
                $modulo = "test";
                break;
        }
    }

    include "vistas/" . $modulo . "/index.php";

?>
