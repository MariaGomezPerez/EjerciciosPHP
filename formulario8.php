<html>
<head>
    <title>Ejercicio 8</title>
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
    
 print "El numero de dia es: $numero";
            echo "<br>";

    if($numero>=1 && $numero<=7){

    switch ($numero) {
    case 1:
        echo 'Domingo';
        break;
 
    case 2:
        echo 'Lunes';
        break;
 
    case 3:
        echo 'Martes';
        break;
 
    case 4:
        echo 'Miércoles';
        break;
 
    case 5:
        echo 'Jueves';
        break;
 
    case 6:
        echo 'Viernes';
        break;
 
    case 7:
        echo 'Sábado';
        break;
 }
 


    }                      ?>
        <br>
        <br>
        
            <p>María del Socorro Gómez Pérez</p>
         <a href="Ejercicio8.php">Regresar al problema</a>
        </div>
        <div id= "content"></div>
        </body>
         </html>