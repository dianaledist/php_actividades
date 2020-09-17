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
  
function guardar_datos () 
{
    include 'diccionario.php';
    foreach ($palabras as $termino=> $definicion)
    {
        echo "<p>".$termino.": ".$definicion."</p>";
        $diccionarionew=fopen("diccionarionew.txt", "r+");        
        foreach ($palabras as $termino=>$definicion) {
            fwrite($diccionarionew, $termino.": ".$definicion.PHP_EOL);           
        }
    }
}
guardar_datos();

function cargar_datos ()
{
    $diccionario=array();
    $aCadena = fopen("diccionarioinput.txt", "r");
    print_r($aCadena);

    while (!feof($aCadena))
    {
        $diccionario=explode(": ", fgets($aCadena));
        print_r($diccionario);
        echo "<br>";
    }
    fclose($aCadena);
}

cargar_datos();

?>


</body>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>