<?php
  $crisTitulo = $_POST["cirbugsTitulo"];
  $crisAutor = $_POST["cirbugsAutor"];
  $crisEdicion = $_POST["cirbugsEdicion"];
  $crisIdioma = $_POST["cirbugsIdioma"];
  $crisAno = $_POST["cirbugsAno"];
  $crisPais= $_POST["cirbugsPais"];
  $crisResumen = $_POST["cirbugsResumen"];
  $crisUrl = $_POST["cirbugsUrl"];
  include "conexion.php";
  try{
    $CmdStr="insert into Libros(Titulo,Autor,Edicion,Idioma,Anio,Pais,Resumen,URL) values(?,?,?,?,?,?,?,?)";
    $Cmd=$Cnx->prepare($CmdStr);
    $Cmd->execute([$crisTitulo,$crisAutor,$crisEdicion,$crisIdioma,$crisAno,$crisPais,$crisResumen,$crisUrl]);
    echo "<link rel='stylesheet' href='css/estilos.css'>";
    echo "<h2>Se registro con exito a:</h2>";
    echo "<h1>".$crisTitulo."</h1>";
    $url='"index.html"';
    echo "<button onclick='window.location.href=$url'>Regresar</button>";
  }
  catch (PDOException $e){
    echo $e->getMessage();
  }
?>