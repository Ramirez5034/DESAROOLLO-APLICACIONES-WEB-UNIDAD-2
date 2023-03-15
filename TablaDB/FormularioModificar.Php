<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["idrecord"];
    echo'<center>
    <form class= "col-3" action="Modificar.php" method="get">
        <label class="form-label" for="Tabla"><h1>Tabla:</h1></label><br>
        <input class="form-control" type="text" id="tabla" name="tabla"> <br>
  <label class="form-label" for="Nombre"><h1>Nombre:</h1></label><br>
  <input class="form-control" type="text" id="nombre" name="nombre"> <br>
  <label class="form-label" for="Correo"><h1>Correo:</h1></label><br>
  <input class="form-control" type="text" id="correo" name="correo"> <br>
  <label class="form-label" for="Calificacion"><h1>Calificacion:</h1></label><br>
        <input class="form-control" type="text" id="calificacion" name="calificacion"> <br>
        <label class="form-label" for="Matricula"><h1>Matricula:</h1></label><br>
        <input class="form-control" type="text" id="matricula" name="matricula"> <br>
        <input class="btn btn-primary" type="submit" value="Insertar">
        <input class="form-label" type="hidden" id="idrecord" name="idrecord"
        value="'.$id.'">
        </form>
    </center>'
    ?>
</body>
</html>