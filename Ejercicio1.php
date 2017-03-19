<html>
<head>
    <title>Ejercicio 1</title>
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
        <h4>Hacer un programa que suma, resta, multiplique y divida dos variables.</h4>
        <br>
    <?php
        echo "<CENTER>";
        $numero1=10;
        $numero2=12;
        //SUMAR
        $suma=$numero1+$numero2;
        echo "$numero1+$numero2"."</br>";
        echo "suma = ".$suma."</br>".'<br/>';
        
        //RESTAR
        $resta=$numero1-$numero2;
        echo "$numero1-$numero2"."</br>";
        echo "resta = ".$resta."</br>".'<br/>';
        
        //MULTIPLICAR
        $multiplique=$numero1*$numero2;
        echo "$numero1*$numero2"."</br>";
        echo "multiplique = ".$multiplique."</br>".'<br/>';
        
        //DIVIDIR
        $divide=$numero1/$numero2;
        echo "$numero1/$numero2"."</br>";
        echo "divide = ".$divide."</br>".'<br/>';
        echo "</CENTER>";
        echo"<br>";
        echo"<br>";
    ?>
    <p>María del Socorro Gómez Pérez</p>
    <a href="index.php">Regresar a menu</a>
        </div>
        <div id= "content"></div>
    </body>
</html>