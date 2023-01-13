<?php

	function conexion(){
		$conexion=mysqli_connect('localhost','root','','prueba');

		return $conexion;
	}
?>