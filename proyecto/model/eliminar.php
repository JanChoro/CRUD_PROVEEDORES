<?php

    require'DataBase.php';

    $db = new DataBase();
    $connection = $db->connect();
    $id = $_GET['id_proveedor'];

    $consulta = $connection->prepare("DELETE FROM proveedores WHERE id_proveedor=?");

    $result = $consulta->execute([$id]);

    if($result){
        echo "<h2>Registro Eliminado<h2>";
    }else{
        echo "<h2>Error al Eliminar<h2>";
    }

    echo "<a href='index.php'>Regresar</a>";

?>