<?php

$dbtype = 'mysqli';
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'final_comp';
$language = 'en';

$connection = mysqli_connect($host, $user) or die("No se pudo crear conexión");
//$connection = new mysqli($host, $user, $password, $db);
$basededatos = mysqli_select_db($connection,$db) or die("Error en conexión de base de datos");
$consulta = "SELECT * FROM final_comp.usuario";
$resultado = mysqli_query($connection,$consulta) or die("No se pudo realizar la consulta");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre<th>";

while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['Nombre'] . "</td>";
	echo "</tr>";
}

echo "/table";
mysqli_close( $connection );
