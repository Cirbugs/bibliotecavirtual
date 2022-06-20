<?php
  include "conexion.php";
  $CmdStr="select * from Libros";
  $Tabla = $Cnx->query($CmdStr);
  echo "<link rel='stylesheet' href='css/estiloslistar.css'>";
  echo "<script src='funciones.js'></script>";
  echo "<h1>Biblioteca Virtual</h1>";
  echo "<div style='text-align:center;'>";
  echo "<table>";
  echo "<tr>";
  
  echo "<th width='140px'>Titulo</th>";
  echo "<th width='250px'>Autor</th>"; 
  echo "<th width='50px'>Edicion</th>";
  echo "<th width='50px'>idioma</th>";
  echo "<th width='50px'>Año</th>";
  echo "<th width='50px'>Pais</th>";
  echo "<th width='220px'>Resumen</th>";
  echo "<th width='50px'>Leer</th>";

  echo "<th width='50px'>Editar</th>";
  echo "<th width='50px'>Eliminar</th>";
  echo "</tr>";
  foreach($Tabla as $Registro){
    echo "<tr>";
    echo "<td>".$Registro["Titulo"]."</td>";
    echo "<td>".$Registro["Autor"]."</td>";
    echo "<td>".$Registro["Edicion"]."</td>";
    echo "<td align='center'>".$Registro["Idioma"]."</td>";
    echo "<td>".$Registro["Anio"]."</td>";
    echo "<td>".$Registro["Pais"]."</td>";
    echo "<td>".$Registro["Resumen"]."</td>";
    echo "<td align='center'><button onclick=window.location='".$Registro["URL"]."'><img src='img/pdf.jpg' width='36px'></button>";
    $Id=$Registro["IdLibro"];
    echo "<td align='center'><button class='btnactualizar' onclick='Actualizar(".$Id.")'><img src='img/lapiz.png' width='16px'></button>";
    echo "<td align='center'><button class='btneliminar' onclick='Eliminar(".$Id.")'><img src='img/basura.png' width='16px'></button>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
  echo "<br>";
  echo "<br>";
  echo "<center><button class='btnback' onclick='window.history.back();'>Regresar</button></center>";
  $Cnx=null;
?>
<style>
  
  button{
    background-color: Transparent;
    border: 0px;
    cursor:pointer; 
  }
  body{
    background-image: url("img/fondo2.jpg");
    background-repeat:no-repeat;
    overflow: hidden;
    background-size: cover;
    height: 100vh;
    margin: 0;
  }
  .btncirbugs{
    background-color: red;
  }
  .btneliminar{
    background-color: red;
  }
  .btnactualizar{
    background-color: green;
  }
  .btnback{
    border: 2px solid aliceblue;
    color: pink;
    font-weight: bold;
    font-size: 26px;
  }

</style>
<html>
<br><br><br><br><br><br>
    <div style="text-align:right;">
    <li><a href="addlibro.php">añadir</a></li>
</html>