<?php
  $Id = $_POST["numId"];
  $cristTitulo = $_POST["cirbugsTitulo"];
  $cristAutor = $_POST["cirbugsAutor"];
  $cristEdicion = $_POST["cirbugsEdicion"];
  $cristIdioma = $_POST["cirbugsIdioma"];
  $cristAno = $_POST["cirbugsAno"];
  $cristPais= $_POST["cirbugsPais"];
  $cristResumen = $_POST["cirbugsResumen"];
  $cristUrl = $_POST["cirbugsUrl"];
  $AlumReg = (isset($_POST["chkRegular"])==true)?1:0;
  try{
    include "conexion.php";
    $CmdStr = "update Libros set Titulo=?, Autor=?, Edicion=?, Anio=?, Pais=?, Idioma=?, Resumen=?, URL=? where IdLibro=?";
    $Cmd = $Cnx->prepare($CmdStr);
    $Cmd->execute([$cristTitulo,$cristAutor,$cristEdicion,$cristAno,$cristPais,$cristIdioma,$cristResumen,$cristUrl,$Id]);
    echo "<link rel='stylesheet' href='css/estilos.css'>";
    echo "<h2>Se Actualizó con exito a:</h2>";
    echo "<h1>".$cristTitulo."</h1>";
    $Cnx = null;
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  echo "<br>";
  $url='"index.html"';
  echo "<button onclick='window.location.href=$url'>Regresar</button>";
?>
