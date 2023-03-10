<!DOCTYPE html>
<html>
<head>
<title>Respuestas</title>
<style>
body{background-color: #3E50A8; text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: large; color:whitesmoke}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="p-3 m-0 border-0 bd-example bd-example-row" style="background-color: #3E50A8; color:whitesmoke">
<form class="col-2" action="resultados.php" method="get">
    <?php
    $numero=$_GET["numero"];
    echo '
    <input class="form-label" type="hidden" id="numero" name="numero"
     value="'.$numero.'">';
    $rango1=$_GET["rng"];
   echo '
   <input class="form-label" type="hidden" id="rng" name="rng"
    value="'.$rango1.'">';
    $rango2=$_GET["rng2"];
   echo '
   <input class="form-label" type="hidden" id="rng2" name="rng2"
    value="'.$rango2.'">';
    $nombre=$_GET["nombre"];
    echo '
    <input class="form-label" type="hidden" id="nombre" name="nombre"
     value="'.$nombre.'">';
     $correo=$_GET["correo"];
    echo '
    <input class="form-label" type="hidden" id="correo" name="correo"
     value="'.$correo.'">';
    if ($rango1>$rango2)
    {
        for ($i=$rango2; $i <=$rango1; $i++)
{
    
    echo'  <div class="col-auto">
    <label for="fname" Style="font-size: x-large;"><div class="badge bg-primary text-wrap" style="width: 6rem;">'.$numero.'X'.$i.':</div></label>
    <input class= "form-control" Style="font-size: large;"type="text" id="multiplo'.$i.'" name="multiplo'.$i.'"
    value=""><br></div>
    ';
}
    }
    else
    {
        for ($i=$rango1; $i <=$rango2; $i++)
        {
            
            echo'  <div class="col-auto">
            <label for="fname" Style="font-size: x-large;"><div class="badge bg-primary text-wrap" style="width: 6rem;">'.$numero.'X'.$i.':</div></label>
            <input class= "form-control" Style="font-size: large;"type="text" id="multiplo'.$i.'" name="multiplo'.$i.'"
            value=""><br></div>
            ';
        }
    }

 ?>
<input class="btn btn-primary" type="submit" value="Comprobar">
</form>
</body>
</html>