<html>
<head>
    <title>Ejercicio 3</title>
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
        <h4>Mostrar en pantalla una tabla de 1 por 10.</h4>
        <br>
        
    <?php
        //Al código deberas agregar una tabla para que lista sea visualizada
        echo "<CENTER>";
        echo "<h2>BUCLE WHILE </h2><br>";
        echo "<table border=1>";
        $i=1;
        for ($i1=1; $i1<11; $i1++)
        {
            
             echo "<td>"."Linea", $i++, "<br>"."</td>";
             
              echo "</tr>";
        }
        echo "</table>";
        echo"<br>";
        echo "</CENTER>";
                ?>
             <p>María del Socorro Gómez Pérez</p>
        <a href="index.php">Regresar a menu</a>
        </div>
        <div id= "content"></div>
        </body>
            </html>