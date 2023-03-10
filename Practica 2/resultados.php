<!DOCTYPE html>
<html>
<head>
<title>Resultado</title>
<style>
body{background-color: #3E50A8; text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: large; color:whitesmoke}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="p-3 m-0 border-0 bd-example bd-example-row" style="background-color: #3E50A8; color:whitesmoke">
  <center>
   <?php
  $numero=$_GET["numero"];
  $rango1=$_GET["rng"];
  $rango2=$_GET["rng2"];
  $nombre=$_GET["nombre"];
  $correo=$_GET["correo"];
  $correctos=0;
  if ($rango1>$rango2)
  {
    for ($i=$rango2; $i <=$rango1; $i++)
    {
      
      $multiplo=$_GET["multiplo".$i];
      $Multiplicacion=($numero*($i)); 
      if ($Multiplicacion==$multiplo)
      {
        $color = "success";
        echo '
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6 bg-primary border-0 rounded-start-3">'.$numero.' x '.$i.'</div>
                <div class="col-2 bg-'.$color.' border-0 rounded-end-3">Su respuesta: '.$multiplo.'</div>
            </div>
        </div>';
          $correctos ++;
      }
      else 
      {
        $color = "danger";
        echo '
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6 bg-primary border-0 rounded-start-3">'.$numero.' x '.$i.'</div>
                <div class="col-2 bg-'.$color.' border-0 rounded-end-3">Su respuesta: '.$multiplo.'</div>
            </div>
        </div>';
      }
    }
   
  }
  else
  {
    for ($i=$rango1; $i <=$rango2; $i++)
    {
      $multiplo=$_GET["multiplo".$i];
      $Multiplicacion=($numero*($i)); 
      if ($Multiplicacion==$multiplo)
      {
        $color = "success";
        echo '
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6 bg-primary border-0 rounded-start-3">'.$numero.' x '.$i.'</div>
                <div class="col-2 bg-'.$color.' border-0 rounded-end-3">Su respuesta: '.$multiplo.'</div>
            </div>
        </div>';
          $correctos ++;
      }
      else 
      {
        $color = "danger";
        echo '
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6 bg-primary border-0 rounded-start-3">'.$numero.' x '.$i.'</div>
                <div class="col-2 bg-'.$color.' border-0 rounded-end-3">Su respuesta: '.$multiplo.'</div>
            </div>
        </div>';
      }
    }
  }

   
    
  
echo "<br><h2>Calificacion: " . ($correctos*10);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tec";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_GET["numero"]!=""){

$_GET["numero"]="";


      
   $sql = "INSERT INTO AlumnoTabla(Nombre,Tabla,RangoI,RangoF,Puntuacion,Correo) VALUES ('".$nombre."','".$numero."','".$rango1."','".$rango2."','".$correctos."','".$correo."')";
   

    $resultado = mysqli_query($conn,$sql);
   }
mysqli_close( $conn );

   ?>
   </center>
</body>
</html>