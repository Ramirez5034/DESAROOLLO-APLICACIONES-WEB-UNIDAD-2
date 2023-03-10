<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$Id=$_GET["idrecord"];

$sql = "DELETE FROM record WHERE IdRecord = $Id";

$resultado = mysqli_query($conn,$sql);

header("Location: Tabla.php"); 
mysqli_close( $conn );



?>