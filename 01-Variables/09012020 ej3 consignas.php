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
    <p>Realiza una sencilla calculadora.</p>
    <li>Pon en una variable un número.</li>
    <li>Pon en otra variable un número.</li>
    <li>Suma y muestra el resultado.</li>
    <li>Realiza otras operaciones (Restar, dividir…).</li>

    <div class="container">
        <h4>Resolución</h4>
        <?php
        $num1=7;
        $num2=5;
        echo "Las variables numéricas elegidas son $num1 y $num2.";
        echo "<p>SUMA: La suma de $num1 y $num2 es ".($num1+$num2)."</p>";
        echo "<p>RESTA: $num1 - $num2 es igual a ".($num1-$num2)."</p>";
        echo "<p>MULTIPLICACIÓN: $num1 multiplicado por $num2 es igual a ".($num1*$num2)."</p>";
        echo "<p>DIVISIÓN: $num1 dividido $num2 es igual a ".($num1/$num2)."</p>";
        echo "<p>MÓDULO: El módulo de $num1 entre $num2 es igual a ".($num1%$num2)."</p>";
        echo "<p>POTENCIA: El número $num1 elevado a la $num2 es igual a ".($num1**$num2)."</p>";
        ?>
    </div>


    <hr/>

    <h2>Consigna 2</h2>
    <p>Guarda en una variable el nombre de una chica/o. Guarda en otra variable el nombre de una chica/o.
    Muestra la frase> “A {chico/a} le gusta { chico/a }.”
    Por ejemplo: A Sonia le gusta Roberto.</p>

    <div class="container">
        <h4>Resolución</h4>
        <?php
        $nombre1="Diana";
        $nombre2="Saul";
        echo "A $nombre1 le gusta $nombre2.";
        ?>
    </div>

    <hr/>

    <h2>Consigna 3</h2>
    <p>Guarda en dos variables un nombre y un año de nacimiento. Muestra la siguiente frase calculando la
    edad: “Me llamo {nombre} y nací el {año de nacimiento}. Por lo tanto tengo 23.”</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $nombre="Diana";
        $year=1989;
        $yearactual=2020;
        echo "Me llamo $nombre y nací en el año $year. Por lo tanto, tengo ". ($yearactual-$year)." años.";
        ?>
    </div>

    <hr/>

    <h2>Consigna 4</h2>
    <p>Guarda un número. Calcula el IVA de esa cifra. Muestra la misma cifra con IVA añadido. Muestra además la cifra sin iva.</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $precio=150;
        $iva=$precio*0.21;
        echo "El iva de un producto que vale $precio es ".($iva).".<br>";
        echo "El producto que cuyo valor es $precio, sin el iva cuesta ".($precio-$iva).".";
        ?>
    </div>

    <hr/>

    <h2>Consigna 5</h2>
    <p>Crear un programa que introduzca en una variable la cantidad de kilómetros recorridos por una motocicleta y en otra la cantidad de litros de combustible que consumió durante ese recorrido. Mostrar el consumo de combustible por kilómetro.</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $distancia=132;
        $gasto=6;
        $consumototal=$gasto/$distancia;
        echo "Si una motocicleta gasta $gasto litros para recorrer $distancia kilómetros, entonces tiene un consumo de ".round($consumototal, PHP_ROUND_HALF_DOWN)." litros por cada kilómetro recorrido."; 
        ?>
    </div>

    <hr/>

    <h2>Consigna 6</h2>
    <p>Crear un programa que introduzca de una temperatura en escala Fahrenheit y le muestre el equivalente en grados Celsius. La fórmula de conversión que se usa para este cálculo es: _Celsius = (5/9) * (Fahrenheit-32)_</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $fahrenheit=56;
        $celcius=(5/9)*($fahrenheit-32);
        echo "Si el termómetro marca $fahrenheit grados Fahrenheit, corresponde a ".round($celcius, PHP_ROUND_HALF_DOWN) ." grados Celcius.";
        ?>
    </div>

    <hr/>

    <h2>Consigna 7</h2>
    <p>Crear un programa que recoja tres números en variables para luego mostrarle el promedio de los tres.</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $num1=32;
        $num2=25;
        $num3=40;
        $promedio=($num1+$num2+$num3)/3;
        echo "Dados los números $num1, $num2 y $num3, y su promedio es ". round($promedio, PHP_ROUND_HALF_UP).".";
        ?>
    </div>

    <hr/>

    <h2>Consigna 8</h2>
    <p>Crear un programa que realice la división de dos números y redondee el resultado a la baja y a la alta (utilizar funciones matemáticas).</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $num1=45;
        $num2=13;
        $division=$num1/$num2;
        echo "Dados los números $num1 y $num2, su cociente redondeado a la baja es ". floor($division). " y su cociente redondeado a la alta es " . ceil($division).".";
        ?>
    </div>

    <hr/>

    <h2>Consigna 9</h2>
    <p>Crear un programa que nos calcule el área y el perímetro de un círculo.</p>
    <div class="container">
        <h4>Resolución</h4>
        <?php 
        $radio=5;
        $perimetro=2*pi()*$radio;
        $area=pi()*$radio**2;
        echo "Si un círculo mide $radio centímetros de radio, tiene un perímetro de ".round($perimetro, PHP_ROUND_HALF_DOWN) ." cm y un área de ". round($area,PHP_ROUND_HALF_DOWN) ." cm2.";
        ?>
    </div>

    <hr/>
    

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>