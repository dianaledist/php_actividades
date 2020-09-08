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
    <h1>Actividades usando lenguaje PHP</h1>

    <h2>Consigna 1</h2>
    <p>MATRIZ BIDIMENSIONAL</p>
    <p>Crear una matriz bidimensional donde las filas son los alumnos y las columnas son las notas de las asignaturas. Serán 4 alumnos con 6 asignaturas. Mostrar por pantalla:</p>
 <li>Matriz completa</li>
 <li>Media de notas por alumno</li>
 <li>Media de notas por asignatura</li>
 <li>Indicar el alumno con la media mas alta y mas baja ( su numero de fila)</li>
 <li>Indicar la asignatura con la media mas alta y mas baja ( su numero de columna)</li>
  
    <div class="container">
        <h4>Resolución</h4>
        <?php
            $estudiante=array(
                array(5,6,8,6,9,10),
                array(8,7,9,8,10,8),
                array(7,6,9,10,8,6),
                array(9,10,9,10,10,9)
            );

            $mediaNotaEstudiante=array(0,0,0,0);
            $mediaNotaAsignatura=array(0,0,0,0,0,0);


            for ($i=0;$i<count($estudiante);$i++)
            {
                for ($j=0;$j<count($estudiante[$i]);$j++)
                {
                    echo "<p>Estudiante ".$i." - Asignatura: ".$j." - Nota: ".$estudiante[$i][$j]." </p>";
                    $sumaEstudiante=array_sum($estudiante[$i]);
                }
                $mediaNotaEstudiante[$i]=$sumaEstudiante/count($estudiante[$i]);
                echo "<p> La promedio de todas las asignaturas cursadas es ".round($mediaNotaEstudiante[$i],PHP_ROUND_HALF_UP)."</p> <hr>";
            }

            $notaPromedioMax=array_keys($mediaNotaEstudiante,max($mediaNotaEstudiante));
            $notaPromedioMin=array_keys($mediaNotaEstudiante,min($mediaNotaEstudiante));
            echo "<p> La nota media más alta es ".max($mediaNotaEstudiante)." que pertenece al estudiante ".$notaPromedioMax[0]."</p>";
            echo "<p> La nota media más baja es ".round(min($mediaNotaEstudiante),PHP_ROUND_HALF_UP)." que pertenece al estudiante ".$notaPromedioMin[0]."</p>";

            for ($i=0;$i<count($estudiante);$i++)
            {
                for ($j=0;$j<count($estudiante[$i]);$j++)
                {
                    $mediaNotaAsignatura[$j]=$mediaNotaAsignatura[$j]+$estudiante[$i][$j]/count($estudiante);
   /*                  echo "Asignatura: ".$j." - Nota: ".$mediaNotaAsignatura[$j]." </p>"; */
                }
            }

            echo "<hr><p>Promedio de cada asignatura:</p>";

            echo "<p>Valores asociados en el array: ";
            print_r ($mediaNotaAsignatura)."</p>";

            foreach ($mediaNotaAsignatura as $asignatura => $nota)
            {
                echo "<p>El promedio de la asignatura ".$asignatura." es ".$nota."</p>";
            }

            $notaAsignaturaMax=array_keys($mediaNotaAsignatura,max($mediaNotaAsignatura)); 
            $notaAsignaturaMin=array_keys($mediaNotaAsignatura,min($mediaNotaAsignatura));
            echo "<p> La nota media más alta de las asignaturas es ".round(max($mediaNotaAsignatura),PHP_ROUND_HALF_EVEN)." que pertenece a la asignatura ".$notaAsignaturaMax[0]."</p>";
            echo "<p> La nota media más baja de las asignaturas es ".round(min($mediaNotaAsignatura),PHP_ROUND_HALF_EVEN)." que pertenece a la asignatura ".$notaAsignaturaMin[0]."</p>";



           /*  for ($row = 0; $row<4; $row++) {
                echo "<ul>";
                for ($col = 0; $col < 6; $col++) {
                echo "<li>".$estudiante[$row][$col]."</li>";
                }
                echo "</ul>";                
            } */
           
        ?>
    </div>

    <hr/>

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>