<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
    $Tabla=$_GET["tabla"];
    $Nombre=$_GET["nombre"];
     $Correo=$_GET["correo"];
     $Calificacion=$_GET["calificacion"];
      $Matricula=$_GET["matricula"];
      $id=$_GET["idrecord"];
      
   $sql = "UPDATE record SET tabla='$Tabla',nombre='$Nombre',correo='$Correo',calificación='$Calificacion',matricula='$Matricula' WHERE IdRecord=". $id;
   

    $resultado = mysqli_query($conn,$sql);

header("Location: Tabla.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>