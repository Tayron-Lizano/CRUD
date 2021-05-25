<?php

 require("select.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$departamento = $_POST['departamento'];
$sueldo = $_POST['sueldo'];

$instance = new Consulta();

$instance->makeUpdate($id, $nombre, $apellido, $edad, $genero, $departamento, $sueldo);

header("location:index.php");


?>


