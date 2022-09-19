<?php
require 'DataBase.php';

$db = new DataBase();

$connection = $db->connect("proveedores");

$bandera = false;


//_________________DATOS______________________--

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $proveedor = $_POST['proveedor'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contacto = $_POST['contacto'];

    $consulta = $connection->prepare("UPDATE proveedores SET proveedor=:proveedor, telefono=:telefono, direccion=:direccion, correo=:correo, contacto=:contacto  WHERE id_proveedor=:id");
    $resultado = $consulta->execute([
        'id' => $id,
        'proveedor' => $proveedor,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'correo' => $correo,
        'contacto' => $contacto
    ]);

    if ($resultado) {
        $bandera = true;
    }
    echo "El Registro fue actualizado";
}
  
else {
  
    $proveedor = $_POST['proveedor'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $contacto = $_POST['contacto'];

    $consulta = $connection->prepare("INSERT INTO proveedores (proveedor, telefono, direccion, correo, contacto) VALUE(:proveedor, :telefono, :direccion, :correo, :contacto)");
    $resultado = $consulta->execute([
        'proveedor' => $proveedor,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'correo' => $correo,
        'contacto' => $contacto
    ]);
    // $consulta->execute("oriental_soft");
    // $consulta->execute("oriental_soft");

    if ($resultado) {
        $bandera = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php if ($bandera) { ?>
        El registro fue guardado correctamente SIUUU
    <?php } else { ?>
        Ocurrió un error a guardar el registro
    <?php }  ?>

    <a href="index.php">Volver</a>
</body>

</html>