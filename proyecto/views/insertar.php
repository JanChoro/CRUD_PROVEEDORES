<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>

    <form action="../model/guarda.php" method="post">

        <label for="proveedor">Proveedor</label>
        <input type="text" name="proveedor" id="proveedor">

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono">

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion">

        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo">

        <label for="contacto">Contacto</label>
        <input type="text" name="contacto" id="contacto">
        <!--  -->

        <!-- <input type="hidden" name="tabla" value="usuario"> -->
        <button value="enviame" name="enviame">Enviarme</button>

    </form>

</body>

</html>