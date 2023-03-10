<!DOCTYPE html>
<html>
<head>
<title>Respuestas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
<form action="resultados.php" method="get">
    <?php
    $numero=$_GET["numero"];
    echo '
    <input class="form-label" type="hidden" id="numero" name="numero"
     value="'.$numero.'">';
    $nombre=$_GET["nombre"];
   echo '
   <input class="form-label" type="hidden" id="nombre" name="nombre"
    value="'.$nombre.'">';
for ($i=1; $i <=10; $i++)
{
    echo' 
    <label for="fname" Style="font-size: x-large;">'.$numero.'X'.$i.':</label>
    <input Style="font-size: large;"type="text" id="multiplo'.$i.'" name="multiplo'.$i.'"
    value=""><br>
    ';
}
 ?>
<input class="btn btn-primary" type="submit" value="Comprobar">
</form>
</center>
</body>
</html>