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
	$datos=array();

	echo "<p>Hola ".$_POST['name']."! Has nacido el día ".$_POST['day']." del mes de ".$_POST['month']." del año ".$_POST['year']."</p>";
	$dia=$_POST['day'];
	$mes=$_POST['month'];


	$edad=date("Y")-$_POST['year'];

	if ($edad>=18 && $edad<65){
		echo "<p>Tienes ".$edad." años de edad. Como sos mayor de 18 años, podés reservar en el restaurante.</p>";
	} elseif ($edad<18 && $edad>0) {
		echo "<p>Tienes ".$edad." años de edad. Como sos menor de 18 años, no podés reservar en el restaurante.</p>";
	} elseif ($edad>=65) {
		echo "<p>Tienes ".$edad." años de edad. Como tenés más de 65 años, sos demasiado grande para reservar en el restaurante.</p>";
	} else {
		echo "<p>Ingrese un número correcto</p>";
	}

	if($mes<=date("m") && $dia<=date("d")) {
		echo "Ya has cumplido años! Felicidades jaja";
	} else {
		echo "Aún te falta para cumplir años. Espero que la pases bonito :)";
	}

	
	 ?> 

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>