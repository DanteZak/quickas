<?php

    if (isset($GET_["nombre"]) && isset($GET_["contraseña"])) {
        //Verifica que existe el usuario

        $conexion = new mysqli("localhost", "root", "", "quickas");

        $sql = "SELECT * FROM usuarios WHERE usr_nick = '" . $GET_["nombre"] . "' AND usr_password '" . $GET_["password"];

        $resultado = $conexion->query($sql);

        if( $resultado->num_rows == 1){
            $_GET["nombre"];
            $_GET["usr_nombre"];

            header ("Location: index.php?m=home");
        }
    }

?>

<!--FALTA EL FETCH-->

<body>

    <form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Nombre</label>
        <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre" value="" required>
        <div class="valid-tooltip">
            Looks good!
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Apellido</label>
        <input type="text" class="form-control" id="validationTooltip02" placeholder="Apellido" value="" required>
        <div class="valid-tooltip">
            Looks good!
        </div>
        </div>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Elegir foto</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>

        <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername">Nombre de usuario</label>
        <div class="input-group">
            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Nombre de usuario" aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-tooltip">
            Please choose a unique and valid username.
            </div>
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="validationTooltip03">Ciudad</label>
        <input type="text" class="form-control" id="validationTooltip03" placeholder="Ciudad" required>
        <div class="invalid-tooltip">
            Please provide a valid city.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip04">Provincia</label>
        <input type="text" class="form-control" id="validationTooltip04" placeholder="Provincia" required>
        <div class="invalid-tooltip">
            Please provide a valid state.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip05">Código postal</label>
        <input type="text" class="form-control" id="validationTooltip05" placeholder="Código postal" required>
        <div class="invalid-tooltip">
            Please provide a valid zip.
        </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Registrarme</button>

</body>