<?php  
// Tocado
	require 'DataBase.php';

	$db = new DataBase();
	$connection = $db->connect();

	$id = $_GET["id_proveedor"];

	$consulta = $connection->prepare("SELECT * FROM proveedores WHERE id_proveedor=:id");
	$consulta->execute(['id'=>$id]);
	$result = $consulta->fetch(PDO::FETCH_ASSOC);

  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<!-- Autor,Año,Titulo -->
<form action="guarda.php" method="post">
        <label for="id">Id_Proveedor</label>
        <input type="number" name="id" value="<?php echo $result['id_proveedor'] ?>"><br> 

		<label for="proveedor">Proveedor</label>
        <input type="text" name="proveedor"  value="<?php echo $result['proveedor'] ?>"><br>  

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $result['telefono'] ?>"><br>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" value="<?php echo $result['direccion'] ?>"><br>

        <label for="correo">Correo</label>
        <input type="text" name="correo" value="<?php echo $result['correo'] ?>"><br>

        <label for="contacto">Contacto</label>
        <input type="text" name="contacto" value="<?php echo $result['contacto'] ?>"><br>
        
        <button type="submit" value="editalo">Editar</button>
        <a href="index.php">Regresar</a><br>      
    </form>
</body>
</html>