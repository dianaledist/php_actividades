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
    <p>(Nos vamos de viaje)
    <li>Guarda en un array los nombres de tus amistades. Imprime la siguiente frase: “{amigo 1} se va de viaje”.</li>
    <li>Crea otro array con el nombre de varias ciudades. Imprime la siguiente frase: “{amigo 2} se va de viaje a {ciudad 1}”</li>
    <li>Imprime aleatoriamente el nombre de un amigo. Pista: $amigos[array_rand($amigos)].</li>
    <li>Aleatoriamente busca dos nombre y una ciudad para generar la siguiente frase: “{amigo aleatorio} se va de viaje con {amigo aleatorio} a la bonita ciudad de {ciudad aleatoria}. </li></p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
            $nombres=array("Renato","Mauricia","Agustine");
            $ciudades=array("La Pampa","Montevideo","Hong Kong");
            echo "Mi amigo ".$nombres[0]." se va de viaje <br>";            
            echo "Mi amiga ".$nombres[1]." se va de viaje a ".$ciudades[2]."<br>";
            echo "Ahora te digo algún nombre de forma random: ".$nombres[array_rand($nombres)]."<br>";
            echo "Por último, te muestro combinaciones random de mis amistades con sus viajes: ".$nombres[array_rand($nombres)]." se va de viaje con ".$nombres[array_rand($nombres)]." a la bonita ciudad de ".$ciudades[array_rand($ciudades)]."<br>"; 

        ?>
    </div>

    <hr/>

    <h2>Consigna 2</h2>
    <p>Crea un diccionario con el censo de población de: España (47329981), Portugal (10562178), Francia (67028048), Italia (60541000) y Grecia (10741165). Ordena de mayor a menor y Muestra por pantalla </p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
            $censo=array("España"=>"47329981","Portugal"=>"10562178","Francia"=>"67028048","Italia"=>"60541000","Grecia"=>"10741165");
            arsort($censo);
            echo "<p> Los países ordenados según su población de mayor a menor  son: <p>";
            foreach ($censo as $pais => $poblacion) {
                echo $pais." tiene una población de ".$poblacion."<br>";
            }

            echo "<p>Otra forma de organizar solo con valores, sin asociación de país</p>";
            $censo1=array("47329981","10562178","67028048","60541000","10741165");
            rsort($censo1);
            $censo1lenght=count($censo1);
            for ($i=0;$i<$censo1lenght;$i++) {
                echo $censo1[$i]."<br>";
            }
            ?>
    </div>

    <hr/>

    <h2>Consigna 3</h2>
    <p>(Lista de películas)
    <li>Guarda en un array tus 6 películas favoritas.</li>
    <li>Imprime en párrafos con el siguiente formato: ‘Película: Los Vengadores’ .</li>
    <li>Añade la posición de la película: ‘Película 4: Godzilla’.</li></p>
  
    <div class="container">
        <h4>Resolución</h4>
        <?php
            $peliculas=array("Eterno resplandor de una mente sin recuerdos","Mr. Nobody","Pánico y locura en Las Vegas","Nymphomaniac","Pi: el orden del caos","Volver al futuro");
            $pelilength=count($peliculas);
            for ($i=0;$i<$pelilength;$i++) {
                echo "Película ".($i+1).": ".$peliculas[$i]."<br>";
            }
        ?>
    </div>

    <hr/>

    <h2>Consigna 4</h2>
    <p>Escriba un programa que muestre una tirada de un número de dados al azar entre 2 y 7 dados e indique los valores. Guardar en un array </p>
  
    <div class="container">
        <h4>Resolución</h4>
        <?php

        $dados=rand(2,7);
        echo "Cantidad de dados : ".$dados."<br>";
        $tirada=array();

        for ($i=1; $i<=$dados;$i++) {
            $valor=rand(1,6);
            $tirada[$i]=$valor;
            echo "Dado Nº: ".$i.". Ha salido el valor ".$valor."<br>";
        }
        ?>
    </div>

    <hr/>

    <h2>Consigna 5</h2>
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
                array(7,5,9,10,8,6),
                array(9,10,9,10,10,9)
            );

            $sumaEstudiante=0;
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


           /*  for ($row = 0; $row<4; $row++) {
                echo "<ul>";
                for ($col = 0; $col < 6; $col++) {
                echo "<li>".$estudiante[$row][$col]."</li>";
                }
                echo "</ul>";                
            } */
           
           
          /*   echo $estudiante[0][0]." Nota ".$estudiante[0][1]." Nota ".$estudiante[0][2]." Nota ".$estudiante[0][3]." Nota ".$estudiante[0][4]." Nota ".$estudiante[0][5]." Nota ".$estudiante[0][6].".<br>";
           echo $estudiante[1][0]." Nota ".$estudiante[1][1]." Nota ".$estudiante[1][2]." Nota ".$estudiante[1][3]." Nota ".$estudiante[1][4]." Nota ".$estudiante[1][5]." Nota ".$estudiante[1][6].".<br>"; */

        
        ?>
    </div>

    <hr/>

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>