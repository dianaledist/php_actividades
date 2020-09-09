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

$mails=(int)$_POST['mails'];
echo "El tipo de datos ingresado es: ";
var_dump($mails);

if(empty($_POST["envio"]))
    {
        $envio="off";
    }
    else 
    {
        $envio=$_POST["envio"];
    }

if (!empty($mails) && empty($envio))
{
    if ($mails<=0)
    {
        echo "<p>Ingrese un número correcto</p>";
    }
    elseif ($mails>=0 && $mails<=2000) 
    {
        echo "<p>Para enviar ".$mails." emails, el servicio es gratuito 0€</p>";
    }
    elseif ($mails>=2001 && $mails<=10000)
    {
        echo "<p>Para enviar ".$mails." emails, el costo es de 0.7€ por unidad, lo cual da un total de <strong>€ ".($mails*0.7)."</strong></p>";
    }
    else 
    {
        echo "<p>Para enviar ".$mails." emails, el costo es de 0.2€ por unidad, lo cual da un total de <strong>€ ".($mails*0.2)."</strong></p>";
    }
}
else
{
    if ($mails<0)
    {
        echo "<p>Ingrese un número correcto</p>";
    }
    elseif ($mails>=0 && $mails<=2000) 
    {
        echo "<p>Para enviar ".$mails." emails, el servicio es gratuito 0€. </p><p>Como ha seleccionado seguro de envío, se cobrará €0.1 por cada email, lo cual da un total de <strong>€".($mails*0.1) ."</strong></p><p>Presupuesto: ".$mails." x 0.1€ =".($mails*0.1)."</p>";
    }
    elseif ($mails>=2001 && $mails<=10000)
    {
        echo "<p>Para enviar ".$mails." emails, el costo es de 0.7€ por unidad.</p><p> Como ha seleccionado seguro de envío, se cobrará €0.1 por cada email, lo cual da un total de <strong>€".(($mails*0.7)+($mails*0.1))."</strong></p><p>Presupuesto: (".$mails." x 0.7€ ) + (".$mails." x 0.1€) = ".(($mails*0.7)+($mails*0.1))."€</p>";
    }
    else 
    {
        echo "<p>Para enviar ".$mails." emails, el costo es de 0.2€ por unidad. </p><p>Como ha seleccionado seguro de envío, se cobrara €0.1 por cada email, lo cual da un total de <strong>€".(($mails*0.2)+($mails*0.1))."</strong></p><p>Presupuesto: (".$mails." x 0.2€ ) + (".$mails." x 0.1€) = ".(($mails*0.2)+($mails*0.1))."€</p>";
    }
}





?> 

</body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>