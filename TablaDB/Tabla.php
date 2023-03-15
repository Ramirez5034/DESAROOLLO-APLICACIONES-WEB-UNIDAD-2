<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<?php
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
 
$consulta="select * from record";
$datos = $conn->query($consulta);
echo '<table class="table">';
echo "<tr>";
echo "<th><p>id</th></p>";
echo "<th><p>tabla</th></p>";
echo "<th><p>nombre</th></p>";
echo "<th><p>correo</th></p>";
echo "<th><p>calificación</th></p>";
echo "<th><p>matricula</th></p>";
while ($registro = $datos->fetch_assoc()){
//$registro = $datos->fetch_array(MYSQLI_ASSOC);
echo '
            <tr>
                <td>'.$registro["IdRecord"].'</td>
                <td>'.$registro["tabla"].'</td>
                <td>'.$registro["nombre"].'</td>
                <td>'.$registro["correo"].'</td>
                <td>'.$registro["calificación"].'</td>
                <td>'.$registro["matricula"].'</td>
                <td><a href="FormularioModificar.php?idrecord='.$registro["IdRecord"].'"><i class="bi bi-pencil-square"></i>
              <td><a href="Eliminar.Php?id='.$registro["IdRecord"].'"><i class="bi bi-trash-fill"></i>';
 echo "</tr>";
}
echo"</table>";
$conn->close();

echo '<form method="GET" action="Formulario.html">';
echo '<button type="submit">Insertar</button>';
echo '</form>';
?>
</body>
</html>