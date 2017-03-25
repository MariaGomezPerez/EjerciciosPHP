<html>
<head>
    <title>Ejercicio 10</title>
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
     
    echo "La tabla de multiplicar del $numero es: <br> ";
            echo "<br>";
             echo "<CENTER>";
        echo "<table border=1>";
       
        
            for($i=1; $i<=10; $i++)
            {
                echo "<tr>";
    echo("<td>"."$numero*$i= ".$numero*$i."<br>"."</td>");
            echo "</tr>";
            }
            echo "</table>";
            echo "</CENTER>";
                ?>
        <br>
        <br>
        
            <p>María del Socorro Gómez Pérez</p>
         <a href="Ejercicio10.php">Regresar al problema</a>
        </div>
        <div id= "content"></div>
        </body>
         </html>