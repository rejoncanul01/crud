<?php 
$contrasena = "Rejoncanul01";
$usuario = "Roberto";
$nombre_bd = "crud";

try {
	$bd = new PDO (
		'mysql:host=utponiente01.mysql.database.azure.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>