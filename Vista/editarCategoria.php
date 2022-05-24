<?php
require_once('../Controlador/controladorCategoria.php');
require_once('layoutSuperior.php');
$categoria = $controladorCategoria->buscarCategoria($_REQUEST['idCategoria']);
//var_dump($categoria);
?>

    <form action="../Controlador/controladorCategoria.php" method="POST">
        <label>Id:</label>
        <input type="number" name="idCategoria" id="idCategoria" value="<?php echo $categoria->getidCategoria(); ?>"  readonly />
        <br>
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $categoria->getnombre(); ?>" />
        <br>
        <button type="submit" name="Actualizar">Actualizar</button>
    </form>
<?php
    require_once('layoutInferior.php');
?>