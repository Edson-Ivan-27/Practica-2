<?php include "include/conexion.php";
              "include/Acciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
    <form id="registro" Action="<?php echo $_SERVER['Php_Self'];?>" Method ="post">
    <div class="container m-0 content-justify-center py-2">

    <div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="text" name="NombrePlantel" class="form-control" placeholder="Nombre de Plantel" required>
</div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="text" name="clavePlant" class="form-control" placeholder="Clave de plantel" required>
</div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <textorca name="Direccion" class="form-control">Direccion</textorca>
</div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="tel" name="telefono" class="form-control" placeholder="55-55-55-55" required>
</div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="text" name="Respon" class="form-control" placeholder="Responsable" required>
</div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <input type="submit" value="Registrar" name="btn" class="btn btn-sucess">
</div>
</div>
</form>
</body>
</html>