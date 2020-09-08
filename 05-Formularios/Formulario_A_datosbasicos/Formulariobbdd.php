<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consignas clase 01</title>

 	   
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>
<body class="container-fluid">
    
<?php 
	$datos=array();
	$datosasoc=array();
	echo "<p>Bienvenid@ ".$_POST['nombre']."<br>";
	echo "Tu teléfono es ".$_POST['tlf']." y tu mail es ".$_POST['mail']."</p>";
	$datos[0]=$_POST['nombre'];
	$datos[1]=$_POST['tlf'];
	$datos[2]=$_POST['mail'];
	
	for($i=0;$i<count($datos);$i++)
	{
        echo $datos[$i]." -- ";
		
    }
    echo "<p></p>";

	$datosasoc["nombre"]=$_POST['nombre'];
	$datosasoc["telefono"]=$_POST['tlf'];
	$datosasoc["email"]=$_POST['mail'];
	
	foreach ($datosasoc as $dato =>$valor)
	{
		echo "<p>La clave es: ".$dato." y su valor es ".$valor."</p>";

	}
	
	
	 ?> 

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>