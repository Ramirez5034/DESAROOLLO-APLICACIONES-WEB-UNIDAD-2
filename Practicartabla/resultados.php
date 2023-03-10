<!DOCTYPE html>
<html>
<head>
<title>Resultado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <center>
   <?php
  $numero=$_GET["numero"];
  $nombre=$_GET["nombre"];
  $correctos=0;
  echo '<h1> Hola:' .$nombre. '<br>Estos son tus resultados';
  for ($i=1; $i <=10; $i++)
  {
    echo "<h4><br>" .$numero. 'X' .($i);
    $multiplo=$_GET["multiplo".$i];
    $Multiplicacion=($numero*($i)); 
    echo "<br>Tu respuesta: $multiplo Respuesta correcta: $Multiplicacion";
    if ($Multiplicacion==$multiplo)
    {
        echo '<h4 style="color:rgb(0, 255, 60);">Correcto</h4>';
        $correctos ++;
    }
    else 
    {
      echo '<h4 style="color:rgb(255, 0, 0);">Incorrecto</h4>';
    }
    
  }
echo "<br>Calificacion: " . ($correctos*10);
   ?>
   </center>
</body>
</html>