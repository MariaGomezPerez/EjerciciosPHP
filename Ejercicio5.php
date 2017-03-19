<html>
<head>
    <title>Ejercicio 5</title>
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
        <h4>Mostrar en pantalla cual es el mayor de TRES números.</h4>
        <br>
        
    <?php
        //Al código deberas agregar una tabla para que lista sea visualizada
        echo "<CENTER>";
       $n1=54;
       $n2=10;
       $n3=36;
        
            if ($n1>$n2)
            if ($n1>$n3)
                echo "El mayor es el número 1: (".$n1.") ";
            
            else echo "El mayor es el numero 3: (".$n3.") "; 
            
          else if($n2>$n3)
          echo "El mayor es el numero 2: (".$n2.")"; 
              
        echo"<br>";
        echo "</CENTER>";
        echo"<br>";
        echo"<br>";
        ?>
        <br>
        <br>
        <br>
        <br>
       
        <p>María del Socorro Gómez Pérez</p>
        <a href="index.php">Regresar a menu</a>
        </div>
        <div id= "content"></div>
        </body>
            </html>