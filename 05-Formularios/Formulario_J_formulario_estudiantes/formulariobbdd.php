<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


</head>


<?php

	$estudiantes=array(
	"Diana"=>array(9,8,10,8,9),
	"Saul"=>array(7,8,6,9,9),
	"Dani"=>array(5,7,4,9,7),
	"Sergio"=>array(5,5,7,8,4),
	);
	
	$opcion=$_POST["opcion"];
	$alumn=$_POST["ingreso"];

	$notas=array($_POST["matematica"],$_POST["filosofia"],$_POST["lengua"],$_POST["fisica"],$_POST["arte"]);

	
	if(isset($_POST["enviar"]) && !empty($opcion) )
	{
			switch($opcion)
			{				
				case 1:
					if (!empty($alumn))
					{
						$estudiantes[$alumn] = $notas;
						echo "<p>Has dado de alta a <strong>".$alumn."</strong></p><p>Lista actualizada de estudiantes: </p>";
						print_r($estudiantes);
					}
					else {
						echo "No ha ingresado un nuevo estudiante";
					}
				break;
				case 2:
					if (!empty($alumn))
					{
						unset($estudiantes[$alumn]);
						echo "<p>Lista actualizada de estudiantes: </p>";
						print_r($estudiantes);
					}
					else {
						echo "No ha ingresado un nuevo estudiante";
					}
				break;
				case 3:
					if (!empty($alumn))
					{
						for($i=0;$i<count($notas);$i++)
						{
							if($notas[$i]!=0)
							{
							$estudiantes[$alumn][$i]=$notas[$i];
							}
						}
					echo "<p>Lista actualizada de notas de estudiantes: </p>";
					print_r($estudiantes);
					}
					else {
						echo "No ha modificado las notas";
					}
				break;
				case 4: 
					if (!empty($alumn))
					{
						foreach ($estudiantes as $nombre => $notasAlumn) 
						{
						
							if ($alumn === $nombre)
							{				
								$media=array_sum($estudiantes[$alumn])/count($notas);	
								echo "La nota media de ".$alumn." es ".$media;
								break;
							}										
						}
					}
					else 
					{
						echo "No ha ingresado un estudiante de la base de datos.";
					}
					
				break;	
				case 5:	

					foreach ($estudiantes as $alumn =>$notas)
					{
						echo "<p>".$alumn.": ";
						for($i=0;$i<count($notas);$i++)
						echo $notas[$i]." | ";
						{
							echo "</p>";
						}
					}

					echo '<table border="1">';
					foreach ($estudiantes as $alumn) {
						echo '<tr>';
							foreach ($alumn as $notas) {
									echo '<td>'.$notas.'</td>';
							}
							echo '</tr>';
					}
					echo '</table>';

					foreach($estudiantes as $alumn=>$notas)
					{
						echo "<p> ".$alumn." ";
						print_r($notas);
						echo "</p>";
					}
					break;					

			}

	}
	else
	{
		echo "No se ha enviado correctamente";
		
	}

	
	?>


</body>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>