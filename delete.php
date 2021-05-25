<?php

require("sentencias.php");

$id= htmlspecialchars(addslashes($_GET['id']));

$instance = new Consulta();

$instance->makeDelete($id);

header("location:index.php");


?>
