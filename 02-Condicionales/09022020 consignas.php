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
    <p>Recoge el año de nacimiento. Calcula la edad. 
    <li>Si es mayor de edad, dile que puede pasar dentro.</li>
    <li>Si es menor, dile que no puede entrar.</li>
    <li>Si tiene más de 65 años, dile que es demasiado mayor para entrar.</li></p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
            $nacimiento=1942;
            $edad=date("Y")-$nacimiento;
            if ($edad>=18 && $edad<=65) {
                echo "Como tienes $edad años, puedes pasar a tomar una cervecita.";                
            }
            else if ($edad>65) {
                echo "A sus $edad años de edad, tomar no es bueno para la salud. Por eso es mejor que no ingreses.";
            }
            else {
                echo "Tienes $edad años. No puedes entrar.";
            }
        ?>
    </div>

    <hr/>

    <h2>Consigna 2</h2>
    <p>Escribe un programa que recoga en una variable si es culpable o no. Asumiremos que: En caso afirmativo el usuario responderá si. En caso, contrario responderá no.
    <li>Si el usuario responde si se escribirá por el documento «irás a la cárcel».</li>
    <li>Si el usuario responde no se escribirá por el documento web «irás a casa».</li>
    <li>En cualquier caso en el documento web se escribirá «la documentación por favor».</li></p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
            $culpable=true;
            echo "<p>IMPORTANTE: Debe presentar la documentación para verificar su culpabilidad</p>.";
            if ($culpable==true) {
                echo "Como te has declarado culpable, irás a la cárcel.";
            }
            else {
                echo "Como te has declarado inocente, irás a tu casa.";
            }
        ?>
    </div>

    <hr/>
    
    <h2>Consigna 3</h2>
    <p>Escribe un programa que responda a un usuario que quiere comprar un helado en una conocida marca de comida rápida, cuánto le costará en función del topping que elija.
    <li>El helado sin topping cuesta 1.90€.</li>
    <li>El topping de oreo cuesta 1€.</li>
    <li>El topping de KitKat cuesta 1.50€.</li>
    <li>El topping de brownie cuesta 0.75€.</li>
    <li>El topping de lacasitos cuesta 0.95€.</li></p>
    <p>En caso de no disponer del topping solicitado por el usuario el programa escribirá por pantalla «no tenemos este topping, lo sentimos» y a continuación informar del precio del helado sin ningún topping. Finalmente, el programa escribe por pantalla el precio del helado con el topping seleccionado (o ninguno).</p>

    <div class="container">
        <h4>Resolución</h4>
        <?php

            echo "<p>Elija un helado: 'sin topping', 'oreo', 'kitkat', 'brownie'o 'lacasitos'</p>";
            $helado="oreo";
            $preciosolo=1.90;
            $preciooreo=1;
            $preciokitkat=1.50;
            $preciobrownie=0.75;
            $preciolacasitos=0.95;

            echo "<p>Ha elegido $helado</p>";
            switch ($helado) {
                case "sin topping";
                echo "El helado sin topping cuesta $preciosolo €.";
                break;
                case "oreo";
                echo "El helado con topping de oreo cuesta ".($preciosolo+$preciooreo)."€.";
                break;
                case "kitkat";
                echo "El helado con topping de KitKat cuesta ".($preciosolo+$preciokitkat)."€.";
                break;
                case "brownie";
                echo "El helado con topping de KitKat cuesta ".($preciosolo+$preciobrownie)."€.";
                break;
                case "lacasitos";
                echo "El helado con topping de KitKat cuesta ".($preciosolo+$preciolacasitos)."€.";
                break;
                default;
                echo "No tenemos ese topping. Lo sentimos.";
                break;
            }
        ?>
    </div>

    <hr/>

    <h2>Consigna 4</h2>
    <p>Escribe un programa que ayude a una empresa a incrementar los salarios de las personas trabajadoras de la siguiente manera:
    <li>Tipo de salario %</li>
    <li>De 0 a 500€ 20%</li>
    <li>De 501€ a 1000€ 10%</li>
    <li>De 1001€ a 1500€ 5%</li>
    <li>Más de 1500€ 3%</li></p>
    <p>Sacar por pantalla el sueldo con incremento que hemos recogido en una variable.</p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
            $salariobasico=700;        
            if ($salariobasico>0 && $salariobasico<=500) {
                echo "Su salario es $salariobasico €, le corresponde un 20% de incremento. Por tanto, su nuevo salario es de ".(($salariobasico*0.2)+$salariobasico);
            }
            else if ($salariobasico>501 && $salariobasico<1000) {
                echo "Su salario es $salariobasico €, le corresponde un 10% de incremento. Por tanto, su nuevo salario es de ".(($salariobasico*0.1)+$salariobasico);
            }
            else if ($salariobasico>1001 && $salariobasico<1500) {
                echo "Su salario es $salariobasico €, le corresponde un 5% de incremento. Por tanto, su nuevo salario es de ".(($salariobasico*0.05)+$salariobasico);
            }
            else if ($salariobasico>1501) {
                echo "Su salario es $salariobasico €, le corresponde un 3% de incremento. Por tanto, su nuevo salario es de ".(($salariobasico*0.03)+$salariobasico);
            }
            else {
                echo "Ingrese un salario correcto";
            }
        ?>
    </div>

    <hr/>

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>