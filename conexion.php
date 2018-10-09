<?php
function Conectarse(){
	$link = mysqli_connect("localhost","root","root");
	if (!$link){
		exit();
	}
	$con = mysqli_select_db($link,"baseweb");
	if (!$con){
		exit();
	}
	return $link;
}
?>

