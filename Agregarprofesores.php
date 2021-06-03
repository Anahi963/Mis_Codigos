<?php
("conexion.php");
mb_http_input("utf-8");
mb_http_output ( "utf-8");

if($_SERVER['REQUEST_METHOD'] =="POST")

{
	$Identidad=$_POST['Identidad']; 
	$Nombre=$_POST['Nombreprof'];
	$Direccion=$_POST['Direccion'];
	$Telefono=$_POST['Telefono'];
	$Sexo=$_POST['Sexo'];
	$Estado=$_POST['Estado'];
	$Observaciones=$_POST['Observaciones'];
	
	
	$sq_insert= "INSERT INTO profesores (Identidad,Nombreprof,Direccion,Telefono,Sexo,Estado,Observaciones)
	VALUES('$Identidad','$Nombre','$Direccion','$Telefono',$Sexo','$Estado','$Observaciones')";
    mysqli_query($conec, $sq_insert);

	
	}	
?>