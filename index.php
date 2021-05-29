<?php

require("sentencias.php");


$instance = new Consulta();
 
$result = $instance->getEmpleados();


if(isset($_GET['id'])){
   $id = htmlentities(addslashes($_GET['id']));
   $row = $instance->selectUpdate($id);
?>

<script>
   var mostrar = true;
</script>

<?php

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title></title>
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="overlay" id="overlay">

    <div class="popup">
<h2 class="title-update">Update form</h2>
<?php foreach($row as $e):  ?>

<form class="updateForm"  action="update.php" method="post">
   <div class="groupform">
      <label for="">ID:</label>  <br> 
      <input type="number" name="id" id="id"  value="<?php echo $e['id'] ?>" >
   </div>
   <div class="groupform">
      <label for="">Nombre</label> <br>
      <input type="text" name="nombre" id="nombre" value="<?php echo  $e['nombre']  ?>"   >
   </div>
   <div class="groupform">
      <label for="">Apellido</label><br>
      <input type="text" name="apellido" id="apellido" value="<?php echo $e['apellido']  ?>"  >
   </div>
   <div class="groupform">
      <label for="">Edad:</label> <br>
      <input type="number" name="edad" id="edad" value="<?php echo $e['edad']  ?>"  >
   </div>
   <div class="groupform">
      <label for="">Género:</label> <br>
      <input type="text" name="genero" id="genero" value="<?php echo $e['genero']  ?>"  >
   </div>
   <div class="groupform">
      <label for="">Departamento:</label> <br>
      <input type="text" name="departamento" id="departamento" value="<?php echo $e['departamento']  ?>"  >
   </div>
   <div class="groupform">
      <label for="">Sueldo:</label> <br>
      <input type="number" name="sueldo" id="sueldo" value="<?php echo $e['sueldo']  ?>"  >
   </div>  
   <div class="groupform">
      <button id="btn-update" type="submit">Actualizar</button>
   </div>
</form>

<?php
endforeach;
?>

    </div>
</div>

<main>

<h1>CRUD PHP</h1>
<form action="insert.php" method="post">
   <div class="groupform">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="name" placeholder="Enter your name">
   </div>
   <div class="groupform">
      <label for="apellido">Apellido</label>
      <input type="Text" name="apellido" id="apellido" placeholder="Enter your last name">
   </div>
   <div class="groupform">
      <label for="edad">Edad</label>
      <input type="number" name="edad" id="edad" placeholder="Enter you age">
   </div>
   <div class="groupform">
      <label for="genero">Género</label>
      <input type="text" name="genero" id="genero" placeholder=" F (FEMALE) - M (MALE)">
   </div>
   <div class="groupform">
      <label for="departamento">Departamento</label>
      <input type="text" name="departamento" id="departamento" >
   </div>
   <div class="groupform">
      <label for="sueldo">Sueldo:</label>
      <input type="number" name="sueldo" id="sueldo">
   </div>
   <button id="btn-nuevo" type="submit">Nuevo</button>
</form>


<table>

<tr>
   <th>	Nombre</th>  <th>Apellido </th>  <th>Edad</th>  <th>Genero</th> <th>Departamento</th>  <th>Sueldo</th> <th colspan=2>Opciones</th>
</tr>

<?php
foreach($result as $e):?>
    <!--echo $e['id']."". $e['nombre']. "".$e['apellido']."" .$e['edad']. "". $e['genero']. "". $e['departamento']. "" . $e['sueldo'];-->
    <tr>
       <td><?php echo $e['nombre'] ?></td>
       <td><?php echo $e['apellido'] ?></td>
       <td><?php echo $e['edad'] ?></td>
       <td><?php echo $e['genero'] ?></td>
       <td><?php echo $e['departamento'] ?></td>
       <td><?php echo $e['sueldo'] ?></td>
       <td><a class="editar" id="editar"  href="index.php?id=<?php echo $e['id']?>">Editar</a></td>
       <td><a class="borrar"  href="delete.php?id=<?php echo $e['id']?>">Borrar</a></td>

    </tr>
<br>

<?php
endforeach;
?>

</table>



</main>

<script>

if(mostrar){
   document.getElementById("overlay").style.display="block";
}

</script>

</body>
</html>
