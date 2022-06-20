<!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="css/estilos.css">
        </head>
        <body>
          <?php
            $Id = $_GET["numId"];
            include "conexion.php";
            $CmdStr = "select * from Libros where (IdLibro=?)";
            $Cmd = $Cnx->prepare($CmdStr);
            $SwEncontro = $Cmd->execute([$Id]);
            $Registro = $Cmd->fetch();
          ?>
          <h1>Confirmación</h1>
          <div class="CajaGrande">
            <div class="CajaChica">
              <h2>Realmente deseas eliminar a:</h2>
              <h1>
                <?php echo $Registro["Titulo"]; ?>
              </h1>
              <button onclick="window.location.href='eliminar.php?numId=<?php echo $Id; ?>'">Eliminar</button>
            </div>
          </div>
          <button onclick='window.history.back();'>Regresar</button>
        </body>
        </html>