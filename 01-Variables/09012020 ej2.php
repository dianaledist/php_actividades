<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 02</title>
</head>
<body>
    <h1> Echo y print </h1>
    <?php
    echo "Hola";
    echo "<br>";
    echo "father";
    echo "<br>";
    echo "f*ckers";
    echo "<br>";
    echo "<p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>";
    print "Aunque el día sea raro, sonríe (:";
    ?>
    <h1> Tipo de datos </h1>
    <?php
    $numero=1;
    var_dump($numero);
    echo "<br>";
    print "Hoy es el día $numero de tu vida";
    ?>
    <h1> Operaciones matemáticas </h1>
    <?php
    $num1=5;
    $num2=2;
    echo "<p>SUMA: La suma de $num1 y $num2 es ".($num1+$num2)."</p>";
    echo "<p>RESTA: $num1 - $num2 es igual a ".($num1-$num2)."</p>";
    echo "<p>MULTIPLICACIÓN: $num1 multiplicado por $num2 es igual a ".($num1*$num2)."</p>";
    echo "<p>DIVISIÓN: $num1 dividido $num2 es igual a ".($num1/$num2)."</p>";
    echo "<p>MÓDULO: El módulo de $num1 entre $num2 es igual a ".($num1%$num2)."</p>";
    echo "<p>POTENCIA: El número $num1 elevado a la $num2 es igual a ".($num1**$num2)."</p>";

    $x='4';
    var_dump($x);
    $y=9;
    var_dump($y);
    $resultado=$x+$y;
    var_dump($resultado);
    echo $resultado;
    
    ?>
</body>
</html>