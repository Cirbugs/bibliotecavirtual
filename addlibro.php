<!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Nuevo Registro</title>
          <link rel="stylesheet" href="css/estilos.css">
        </head>
        <body style="background:pink;">
          <div class="CajaGrande">
            <div class="CajaChica">
              <form action="addbacklibro.php" method="post">
                <h2>Biblioteca Añadir (Administrador)</h2>
                <p>
                  <label for="cirbugsTitulo">Titulo:</label>
                  <input type="text" name="cirbugsTitulo" id="cirbugsTitulo">
                </p>
                <p>
                  <label for="cirbugsAutor">Autor:</label>
                  <input type="text" name="cirbugsAutor" id="cirbugsAutor">
                </p>
                <p>
                  <label for="cirbugsEdicion">Edicion:</label>
                  <input type="number" name="cirbugsEdicion" id="cirbugsEdicion">
                </p>

                <p>
                  <label for="cirbugsIdioma">idioma:</label>
                  <input type="text" name="cirbugsIdioma" id="cirbugsidioma">
                </p>

                <p>
                  <label for="cirbugsAno">Año:</label>
                  <input type="date" name="cirbugsAno" id="cirbugsAno" value="<?php echo date('Y-d-m'); ?>">
                </p>

                <p>
                  <label for="cirbugsPais">Pais:</label>
                  <input type="text" name="cirbugsPais" id="cirbugsPais">
                </p>

                <p>
                  <label for="cirbugsResumen">Resumen:</label>
                  <input type="text" name="cirbugsResumen" id="cirbugsRusumen">
                </p>

                <p>
                  <label for="cirbugsUrl">URL DEL LIBRO:</label>
                  <input type="url" name="cirbugsUrl" id="cirbugsUrl">
                </p>
        
                <p>
                  <button type="submit">Insertar</button>
                  <button type="reset">Cancelar</button>
                </p>
              </form>
            </div>
          </div>
        <button onclick="window.history.back();">Regresar</button>
        </body>
      </html>