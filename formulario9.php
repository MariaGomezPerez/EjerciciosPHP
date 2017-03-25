<html>
<head>
    <title>Ejercicio 9</title>
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
    
            if($bruto>=1500)
            {
                $resul= $bruto*0.16;
            }else{
                $resul= $bruto*0.1;
            }
    echo "El resultado menor del importe neto es: $resul";
                  ?>
        <br>
        <br>
        
            <p>María del Socorro Gómez Pérez</p>
        <a href="Ejercicio9.php">Regresar al problema</a>
        </div>
        <div id= "content"></div>
        </body>
         </html>