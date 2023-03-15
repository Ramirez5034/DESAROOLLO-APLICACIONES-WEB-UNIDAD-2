<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["id"];

$sql = "delete from record where IdRecord=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Tabla.php"); 
mysqli_close( $conn );



?>