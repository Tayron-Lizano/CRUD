<?php

require("select.php");

$id= $_GET['id'];

$instance = new Consulta();

$instance->makeDelete($id);

header("location:index.php");


?>
