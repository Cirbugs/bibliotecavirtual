<?php
  $Id = $_GET["numId"];
  include "conexion.php";
  try{
    $CmdStr = "delete from Libros where (IdLibro=?)";
    $Cmd = $Cnx->prepare($CmdStr);
    $SwEncontro = $Cmd->execute([$Id]);
    echo "<link rel='stylesheet' href='css/estilos.css'>";
    echo "<h2>El Registro se Elimino con exito</h2>";
    $Cnx = null;
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  echo "<br>";
  $url='"index.html"';
  echo "<button onclick='window.location.href=$url'>Regresar</button>";
?>