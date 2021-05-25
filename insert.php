<?php

require("sentencias.php");

$instance = new Consulta();

$nombre = htmlentities(addslashes(strtoupper($_POST['nombre'])));
$apellido = htmlentities(addslashes(strtoupper($_POST['apellido'])));
$edad = htmlentities(addslashes($_POST['edad']));
$genero = htmlentities(addslashes(strtoupper($_POST['genero'])));
$departamento = htmlentities(addslashes(strtoupper($_POST['departamento'])));
$sueldo = htmlentities(addslashes($_POST['sueldo']));

$instance->makeInsert($nombre, $apellido, $edad, $genero, $departamento, $sueldo);

header("location:index.php");


?>
