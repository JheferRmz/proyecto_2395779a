<?php
require_once('../Controlador/controladorCategoria.php');
require_once('layoutSuperior.php');
?>

    <h1 align="center">Producto</h1>
    <form action="../Controlador/controladorProducto.php" method="POST">
        <label>Categoría</label>
        <select name="idCategoria" id="idCategoria">
            <option value="">Seleccione</option>
            <?php
                foreach($listaCategoria as $categoria){
                    echo "<option value=$categoria[idCategoria] >
                    $categoria[nombre]
                    </option>";
                }
            ?>
        </select>
        <br>
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" />
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" id="precio" />
        <br>
        <label>Estado</label>
        <input type="text" name="estado" id="estado" />
        <br>
        <button type="submit" name="Registrar">Registrar</button>
    </form>
    <?php
    require_once('layoutInferior.php');
?>