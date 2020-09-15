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

$nombre=$_POST["nombre"];
$genero=$_POST["genero"];

$lectura=isset($_POST["lectura"]);
$lectura=isset($_POST["deporte"]);
$lectura=isset($_POST["cine"]);


function comprobar ($formulario) //variable formal
{
$aficion=""; //variable local
if(empty($formulario))
    {
        $aficion="off";
    }
    else 
    {
        $aficion=$formulario;
    }
    return $aficion;
}

$lectura=comprobar($_POST["lectura"]); // variable real
$deporte=comprobar($_POST["deporte"]);
$cine=comprobar($_POST["cine"]);





if(empty($_POST["lectura"]))
    {
        $lectura="off";
    }
    else 
    {
        $lectura=$_POST["lectura"];
    }

if(empty($_POST["deporte"]))
    {
        $deporte="off";
    }
    else 
    {
        $deporte=$_POST["deporte"];
    }

if(empty($_POST["cine"]))
    {
        $cine="off";
    }
    else 
    {
        $cine=$_POST["cine"];
    }




$horario=$_POST["horario"];

if(isset($_POST["enviar"]))
{
    if(!empty($nombre) && !empty($genero) && !empty($horario))
    {
        $nombre=trim($nombre);
        var_dump($nombre);
        if($horario=="*")
        {
            echo "No se ha definido ningún horario";
        }
        else 
        {
            echo "Nombre: ".$nombre."<br>";
            echo "Género: ".$genero."<br>";
            if ($lectura=="on")
            {
                echo "Le gusta leer <br>";
            }
            if($deporte=="on")
            {
                echo "Le gusta el deporte<br>";
            }
            if($cine=="on")
            {
                echo "Le gusta el cine <br>";
            }
            switch($horario)
            {
                case 1:
                    echo "Le interesa la mañana";
                break;
                case 2:
                    echo "Le interesa la tarde";
                break;
                case 3:
                    echo "Le interesa la noche";
                break;
            }
        }
        
    }
    else
    {
        echo "Faltan datos";
    }
}


?> 

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>