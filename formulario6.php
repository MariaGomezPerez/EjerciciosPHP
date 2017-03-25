<html>
<head>
    <title>Ejercicio 6</title>
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

print "Tu nombre es: $nombre";
echo"<br>";
echo"<br>";

 if($_REQUEST['edad']>=18)
 {
     echo " Tienes $edad y Eres un adulto...";
      
 }
else{
    echo "Tienes $edad y Eres un niño!!";
}


?>
        <br>
        <br>       
        <br>
        <br>
            <p>María del Socorro Gómez Pérez</p>
        
        <a href="Ejercicio6.php">Regresar al problema</a>
        </div>
        <div id= "content"></div>
        </body>
            </html>