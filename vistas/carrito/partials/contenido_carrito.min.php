<?php

    $_SESSION["carrito"][] = $_GET["pub_id"];

?>
    
    <p><h1>Mi pedido</h1></p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
            </div>
        </div>
    </div>

    <p>Subtotal:</p>

    <button type="button" class="btn btn-primary btn-lg btn-block">Agregar más</button>
    <button type="button" class="btn btn-danger btn-lg btn-block">Continuar</button>

    <?php include "script.php";?>