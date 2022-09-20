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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<style>
    .oscuro{
        color:black;
    }

</style>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem; background-color: rgba(0, 0, 255, 0.1);">
          <div class="card-body p-2 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

            <h2 class="fw-bold mb-2 text-uppercase"style="color:black;">Editar Proveedor</h2>
              <form action="guarda.php" method="post">
                <br><br>
        <label for="id" class="oscuro">Id_Proveedor</label>
        <input type="number" name="id" value="<?php echo $result['id_proveedor'] ?>"><br><br> 

		<label for="proveedor" class="oscuro">Proveedor</label>
        <input type="text" name="proveedor"  value="<?php echo $result['proveedor'] ?>"><br><br>  

        <label for="telefono" class="oscuro">Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $result['telefono'] ?>"><br><br>

        <label for="direccion" class="oscuro">Dirección</label>
        <input type="text" name="direccion" value="<?php echo $result['direccion'] ?>"><br><br>

        <label for="correo" class="oscuro">Correo</label>
        <input type="text" name="correo" value="<?php echo $result['correo'] ?>"><br><br>

        <label for="contacto" class="oscuro">Contacto</label>
        <input type="text" name="contacto" value="<?php echo $result['contacto'] ?>"><br><br><br>
        
        <button type="submit" value="editalo">Editar</button>
        <a href="index.php">Regresar</a><br>      
    </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<!-- DATOS -->
</body>
</html>