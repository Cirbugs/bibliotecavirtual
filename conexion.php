<?php
  try {
    $BaseDatos = "libros";
    $Usuario = "root";      
    $Contrasenia = "";      
    $Cnx = new PDO(
      'mysql:host=localhost;dbname=' . $BaseDatos,
      $Usuario,
      $Contrasenia);
  } catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
  }
  ?>