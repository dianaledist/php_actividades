<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>


<?php
   $nombre=$_POST['nombre'];
   $dni=$_POST['dni'];
   $fecha=$_POST['fecha'];
   $personas=$_POST['personas'];
   $opciones=$_POST['opciones'];
   $preciototal=0;
   $preciorafting=35;
   $preciosenderismo=25;
   $preciosubmarinismo=50;

   $reserva=array($_POST['nombre'],$_POST['dni'],$_POST['fecha'],$_POST['personas'],$preciototal);

    $actividades=array(
       "rafting"=>array (
           array("Diana","1111111a","2020-09-10",3,105)
       ),
       "senderismo"=>array(
           array("Saul","2222222ba","2020-09-11",2,105)
       ),
       "submarinismo"=>array (
           array("Pablo","3333333c","2020-09-09",4,105)
       ),
   );

   if(isset($_POST["enviar"])  && !empty($nombre) && !empty($dni) && !empty($personas) && !empty($fecha))
   {
       switch($opciones)
       {
           case "rafting":
               echo "<p>Actividad 1: Rafting</p>";

             foreach ($actividades as $actividad => $datos) 
             {
                 for ($i=0; $i < count($datos); $i++) 
                 { 
                    if ($datos[$i][2] == $fecha && $actividad==$opciones) 
                    {
                        echo "La fecha ingresada está ocupada, ingrese una nueva fecha";
                        exit;
                    }                                 
                 }
                 if ($datos!= $fecha) 
                 {
                    array_push($actividades[$actividad],$reserva);                    
                }
                echo "<p>Reserva realizada a nombre de: ".$nombre."</p>";
                echo "<p>DNI: ".$dni."</p>";
                echo "<p>Para la fecha: ".$fecha."</p>";
                echo "<p>Número de personas que realizan la actividad: ".$personas."</p>";
                echo "<p>Precio total de la actividad: ".$personas*$preciorafting;
                echo "<p>Lista actualizada: </p>";
                print_r($actividades);   
            break;
             }   
           break;

            case "senderismo":
            echo "<p>Actividad 2: Senderismo</p>";

            foreach ($actividades as $actividad => $datos) {
                for ($i=0; $i < count($datos); $i++) 
                { 
                   if ($fecha=="2020-09-11") 
                   {
                       echo "La fecha ingresada está ocupada, ingrese una nueva fecha";
                    exit;
                   }                                 
                }
                if ($datos!= $fecha) 
                {
                   array_push($actividades[$actividad],$reserva);                    
               }
               echo "<p>Reserva realizada a nombre de: ".$nombre."</p>";
               echo "<p>DNI: ".$dni."</p>";
               echo "<p>Para la fecha: ".$fecha."</p>";
               echo "<p>Número de personas que realizan la actividad: ".$personas."</p>";
               echo "<p>Precio total de la actividad: ".$personas*$preciosenderismo;
               echo "<p>Lista actualizada: </p>";
               print_r($actividades);   
           break;
            }   
          break;

           case "submarinismo":
               echo "caso 1 Submarinismo";
               
               foreach ($actividades as $actividad => $datos) {
                for ($i=0; $i < count($datos); $i++) 
                { 
                   if ($fecha==$datos[$i][2] && $actividad==$opciones) 
                   {
                       echo "La fecha ingresada está ocupada, ingrese una nueva fecha";
                       exit;
                   }                                 
                }
                if ($datos!= $fecha) 
                {
                   array_push($actividades[$actividad],$reserva);                    
               }
               echo "<p>Reserva realizada a nombre de: ".$nombre."</p>";
               echo "<p>DNI: ".$dni."</p>";
               echo "<p>Para la fecha: ".$fecha."</p>";
               echo "<p>Número de personas que realizan la actividad: ".$personas."</p>";
               echo "<p>Precio total de la actividad: ".$personas*$preciosubmarinismo;
               echo "<p>Lista actualizada: </p>";
               print_r($actividades);   
           break;
            }   
          break;

        break;
        }
   }
   else 
   {
       echo "<p>Hay error en los datos introducidos en el formulario, vuelve a intentarlo!</p>";
   }
   
	?>


</body>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>