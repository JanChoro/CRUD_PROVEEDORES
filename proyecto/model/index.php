<?php

    require'DataBase.php';

$db = new DataBase();

$con = $db->connect("proveedores");

$query = $con->prepare("SELECT * FROM proveedores");

$query->execute();

$proveedores = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link rel="stylesheet" href="styles/diseno.css">
    <title>Proveedores</title>
</head>
<body>
    <a href="../views/insertar.php">Nuevo Proveedor</a>
    <table border="1">
        <th>Id</th>
        <th>Proveedor</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th>Contacto</th>
        <th>Editar</th>
        <th>Eliminar</th>
        <tbody>

    <?php foreach ($proveedores as $key => $proveedor) {?>
        <tr>

            <td><?php echo $key+1; ?></td>
            <td><?php echo $proveedor["proveedor"]; ?></td>
            <td><?php echo $proveedor["telefono"]; ?></td>
            <td><?php echo $proveedor["direccion"]; ?></td>
            <td><?php echo $proveedor["correo"]; ?></td>
            <td><?php echo $proveedor["contacto"]; ?></td>
            <td><a href="editar.php?id_proveedor=<?php echo $proveedor['id_proveedor']?>">Editar</a></td>
            <td><a href="eliminar.php?id_proveedor=<?php echo $proveedor['id_proveedor']?>">Eliminar</a></td>
        
        </tr>
    <?php } ?>
        </tbody>
    </table>
</body>
</html>