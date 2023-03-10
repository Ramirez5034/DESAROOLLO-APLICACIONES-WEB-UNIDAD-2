<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_GET["tabla"]!=""){
    $Tabla=$_GET["tabla"];
    $Nombre=$_GET["nombre"];
     $Correo=$_GET["correo"];
     $Calificacion=$_GET["calificacion"];
      $Matricula=$_GET["matricula"];

$_GET["tabla"]="";


      
   $sql = "INSERT INTO record (tabla, nombre, correo,calificación,matricula) VALUES ('".$Tabla."','".$Nombre."','".$Correo."','".$Calificacion."','".$Matricula."')";
   

    $resultado = mysqli_query($conn,$sql);
   }
header("Location: Tabla.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>