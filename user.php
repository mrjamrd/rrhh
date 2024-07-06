<?php
require_once("include/usuarios.php");
$tra = new Trabajo();
$nombre =  $_POST["nombre"];
$usuario = $_POST["usuario"];
$pass =    $_POST["pass"];

$tra->addUser($nombre,$usuario,$pass);
echo 1;

?>
