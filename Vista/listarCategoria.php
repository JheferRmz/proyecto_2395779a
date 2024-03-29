<?php
    require_once('../Controlador/controladorCategoria.php');
    require_once('layoutSuperior.php');
?>

    <a href="../Controlador/controladorCategoria.php?vista=registrarCategoria.php" >Registrar</a>
    <h1 align="center">Categorías</h1>
    <table border="1" align="center">
        <thead>
            <tr>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaCategoria as $categoria){
                    echo "<tr>";
                    echo "<td>".$categoria['idCategoria']."</td>";
                    echo "<td>".$categoria['nombre']."</td>";
                    echo "<td>
                    <form id='frmCategoria$categoria[idCategoria]' method='POST' action='../Controlador/controladorCategoria.php'>
                        <input type='hidden' name='idCategoria' value=".$categoria['idCategoria']." />
                        <button type='submit' name='Editar'>Editar</button>
                        <button type='button' onclick='validarEliminacion($categoria[idCategoria])' name='Eliminar'>Eliminar</button>
                        <input type='hidden' name='Eliminar' />
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        //Declarar la función de javascript
        function validarEliminacion(idCategoria){
            if(confirm('¿Realmente desea eliminar?')){
                //document.frmCategoria.submit();
                document.getElementById('frmCategoria'+idCategoria).submit();
            }
        }
    </script>
<?php
    require_once('layoutInferior.php');
?>