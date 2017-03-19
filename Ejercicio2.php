<html>
<head>
    <title>Ejercicio 2</title>
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
        <h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100.</h4>
        <br>
    <?php
        echo "<CENTER>";
        echo "<table border=1>";
        $n=1;
        for ($n1=1; $n1<=10; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
            {
              echo "<td>", $n++, "</td>";
              $n-$n+1;
            }
            echo "</tr>";
        }
        echo "</table>";
        echo"<br>";
        echo "</CENTER>";
        echo"<br>";
        echo"<br>";
        ?>
        <br>
        <p>María del Socorro Gómez Pérez</p>
        <a href="index.php">Regresar a menu</a>
        </div>
        <div id= "content"></div>
        </body>
            </html>
    