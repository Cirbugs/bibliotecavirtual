<!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Actualizar Datos</title>
          <link rel="stylesheet" href="css/estilos.css">
        </head>
        <body style="background-color:thistle;">
          <?php
          $Id = $_GET["numId"];
          include "conexion.php";
          $CmdStr = "select * from Libros where (IdLibro=?)";
          $Cmd = $Cnx->prepare($CmdStr);
          $SwEncontro = $Cmd->execute([$Id]);
          $Registro = $Cmd->fetch();
          ?>
          <h1>Actualización de libros</h1>
          <div class="CajaGrande">
            <form action="actualiza.php" method="post">
              <div class="CajaChica">
                <h2>Datos De Los Libros</h2>
                <p>
                  <label for="numId">Id:</label>
                  <input type="number" name="numId" id="numId" readonly value="<?php echo $Registro["IdLibro"]; ?>">
                </p>
                <p>
                  <label for="cirbugsTitulo">Titulo:</label>
                  <input type="text" name="cirbugsTitulo" id="cirbugsTitulo" value="<?php echo $Registro["Titulo"]; ?>">
                </p>
                <p>
                  <label for="cirbugsAutor">Autor:</label>
                  <input type="text" name="cirbugsAutor" id="cirbugsAutor" value="<?php echo $Registro["Autor"]; ?>">
                </p>
                <p>
                  <label for="cirbugsEdicion">Edicion</label>
                  <input type="text" name="cirbugsEdicion" id="cirbugsEdicion" value="<?php echo $Registro["Edicion"]; ?>">
                </p>

                <p>
                  <label for="cirbugsIdioma">Idioma</label>
                  <input type="text" name="cirbugsIdioma" id="cirbugsIdioma" value="<?php echo $Registro["Idioma"]; ?>">
                </p>

                <p>
                  <label for="cirbugsAno">Ano</label>
                  <input type="text" name="cirbugsAno" id="cirbugsAno" value="<?php echo $Registro["Anio"]; ?>">
                </p>

                <p>
                  <label for="cirbugsPais">Pais</label>
                  <input type="text" name="cirbugsPais" id="cirbugsPais" value="<?php echo $Registro["Pais"]; ?>">
                </p>

                <p>
                  <label for="cirbugsResumen">Resumen</label>
                  <input type="text" name="cirbugsResumen" id="cirbugsResumen" value="<?php echo $Registro["Resumen"]; ?>">
                </p>

                <p>
                  <label for="cirbugsUrl">URL</label>
                  <input type="url" name="cirbugsUrl" id="cirbugsUrl" value="<?php echo $Registro["URL"]; ?>">
                </p>

              </div>
              <button type="submit">Actualizar</button>
            </form>
          </div>
          <button onclick='window.location.href="index.html"'>Regresar</button>  
        </body>
        </html>     