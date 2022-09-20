<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Formulario</title>
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
        <h2 class="fw-bold mb-2 text-uppercase"style="color:black;">Nuevo Proveedor</h2>
            <form action="../model/guarda.php" method="post">
                <br><br>
                <label for="proveedor" class="oscuro">Proveedor:</label>
                <input type="text" name="proveedor" id="proveedor"><br>
                <br>
                <label for="telefono" class="oscuro">Teléfono:</label>
                <input type="text" name="telefono" id="telefono"><br>
                <br>
                <label for="direccion" class="oscuro">Dirección:</label>
                <input type="text" name="direccion" id="direccion"><br>
                <br>
                <label for="correo" class="oscuro">Correo:</label>
                <input type="text" name="correo" id="correo"><br>
                <br>
                <label for="contacto" class="oscuro">Contacto:</label>
                <input type="text" name="contacto" id="contacto">
                <br><br><br>
<!--  -->

<!-- <input type="hidden" name="tabla" value="usuario"> -->
<button value="enviame" name="enviame">Registrar</button>

</form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>