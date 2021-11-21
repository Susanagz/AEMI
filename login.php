<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="test";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
  die("No hay conexion: ".mysqli_connect_error());
}
$nombre=$_POST["usuario"];
$pass=$_POST["contrasena"];

$query =mysqli_query($conn,"SELECT *FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr==1) {
  header("Location: inicio.html");
  echo "Bienvenido al sistema AEMI:" .$nombre;
}
else {
  header("Location: index.html");
  echo "Contraseña o usuario incorrecto";
}

 ?>
