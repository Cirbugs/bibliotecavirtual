<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirbugs Biblioteca</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <center>
<div style="text-align:right;">
    <li><a style="color:blanchedalmond;" href="addlibro.php">AÑADIR/a></li>
    <br>
    <li><a style="color:blanchedalmond;" href="librosadmin.php">ADMIN</a></li>
    </div></center>
<?php include("libros.php") ?>
    <br><br><br><br><br><br>
</body>

</html>