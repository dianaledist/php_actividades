<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>

 	   
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>
<body class="container-fluid">
    
<?php 

$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$hijxs=$_POST['hijxs'];

if(isset($_POST["enviar"])) 
{
    if(empty($nombre) || empty($genero))
    {
        echo "Ingrese todos los datos de forma completa";
    }
    else 
    {
        if ($hijxs<0)
        {
            echo "No puede ingresar una cantidad de personas negativa";
        }
        elseif ($hijxs==0)
        {
            echo "La persona ".$nombre." de género ".$genero." no tiene hijxs";
        }
        elseif ($hijxs==1)
        {
            echo "La persona ".$nombre." de género ".$genero." tiene ".$hijxs." hijx";
        }        
        else 
        {
            echo "La persona ".$nombre." de género ".$genero." tiene ".$hijxs." hijxs a su cargo";
        }
    }
}

?> 

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>