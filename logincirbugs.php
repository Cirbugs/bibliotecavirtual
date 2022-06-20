<?php
$usuario_correcto = "alumno";
$palabra_secreta_correcta = "alumno";
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: home.php");
} else {
    echo "Pagina en Construccion";
}