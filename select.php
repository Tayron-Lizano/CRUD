<?php

require("conexion.php");

class Consulta extends Conexion {

   public function Consulta(){
      parent::Conexion();
   }

   public function getEmpleados(){
      $sql = "SELECT * FROM empleados";
      $result = $this->link->prepare($sql);
      $result->execute(array());
      $row = $result->fetchAll(PDO::FETCH_BOTH);
      //FETCH_BOTH nos ppermite acceder a lños registros ya sea por INDICES o por NOMBRES de los campos
      return $row;
   
   }

   public function makeDelete($id){
      $sql = "DELETE FROM empleados WHERE id = :ID";
      $result=$this->link->prepare($sql);
      $result->execute(array(":ID"=>$id));

   }

   public function makeUpdate($id, $nombre, $apellido, $edad, $genero, $departamento, $sueldo){
      $sql = "UPDATE empleados SET nombre=:NOM, apellido=:APE, edad=:EDAD, genero=:GEN, departamento=:DEP, sueldo=:SUE 	WHERE id=:ID";
      $result=$this->link->prepare($sql);
      $result->execute(array(":ID"=>$id, ":NOM"=>$nombre, ":APE"=>$apellido, ":EDAD"=>$edad, ":GEN"=>$genero, ":DEP"=>$departamento, ":SUE"=>$sueldo, ":ID"=>$id));

   }

   public function selectUpdate($id){
	$sql = "SELECT * FROM empleados WHERE id = :ID";
	$result=$this->link->prepare($sql);
	$result->execute(array(":ID"=>$id));

	$row = $result->fetchAll(PDO::FETCH_BOTH);

	return $row;
   }
}

?>
