<?php

 require("sentencias.php");

$id = htmlentities(addslashes($_POST['id']));
$nombre = htmlentities(addslashes(strtoupper($_POST['nombre'])));
$apellido = htmlentities(addslashes(strtoupper($_POST['apellido'])));
$edad = htmlentities(addslashes($_POST['edad']));
$genero = htmlentities(addslashes(strtoupper($_POST['genero'])));
$departamento = htmlentities(addslashes(strtoupper($_POST['departamento'])));
$sueldo = htmlentities(addslashes($_POST['sueldo']));

$instance = new Consulta();

$instance->makeUpdate($id, $nombre, $apellido, $edad, $genero, $departamento, $sueldo);

header("location:index.php");


?>


