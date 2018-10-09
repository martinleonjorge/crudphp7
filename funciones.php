<?php
require_once("conexion.php");
$link=Conectarse();

if(isset($_POST["Insertar"])){
	$Insertar=_POST["Insertar"];
}else{
	$Insertar="";
	
}

swtich($Insertar){
	case 'usuarios';
	insertarEmpelados($link);
	break();	
}

private insertarEmpleados($link){
	
	
}

?>

