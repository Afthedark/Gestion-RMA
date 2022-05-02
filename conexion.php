<?php 
	//conexiones
	$host = 'localhost:33061';
	$user = 'root';
	$password = '';
	$db = 'dbrma';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}
	else
	{


	}

?>	