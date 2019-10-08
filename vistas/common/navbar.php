<nav class="navbar navbar-light bg-light">
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorias
        </button>
    <div class="dropdown-menu">

        <a class="dropdown-item" href="index.php">Todas</a>

        <?php
            $conexion = new mysqli("localhost", "root", "", "quickas");

            $sql = "SELECT * FROM categorias ORDER BY cat_nombre";

            $categorias = $conexion->query($sql);

            foreach ($categorias as $categoria){
        ?>

        <a class="dropdown-item" href="index.php?cat_id= <?=$categoria["cat_id"]?>"> <?=$categoria ["cat_nombre"]?> </a>
    </div>

    <?php
        } 
    ?>

    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Carrito
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
        </div>
</nav>