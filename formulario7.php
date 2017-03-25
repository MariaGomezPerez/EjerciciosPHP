<html>
<head>
    <title>Ejercicio 7</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style3.css"/>
    <link rel="icon" type="image/png" href="img/telegram.png"/>

</head>
    <body>
        <div id="wrapper">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <br>
<?php

extract($_REQUEST,EXTR_SKIP);
            
echo "Tiempo: $tiempo";
            echo"<br>";

echo "Velocidad: $velocidad";
            echo"<br>";
echo"<br>";
 $resul=$velocidad*$tiempo;           

print "Tu distancia fue: $resul.m/s";
            
echo"<br>";
echo"<br>";

?>
            <img src="img/correr.jpg" height="100px" width="380px"/>
        <br>
        <br>
        
            <p>María del Socorro Gómez Pérez</p>
         <a href="Ejercicio7.php">Regresar al problema</a>
        </div>
        <div id= "content"></div>
        </body>
            </html>