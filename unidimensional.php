<!DOCTYPE html>
<html lang="es">
<head>
<title>Investigacion Complementaria</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Ejemplo de una matriz unidimensional</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
            <h2>Codigo PHP-Matriz unidimensional</h2>
            $cars = array("Cuadernos", "Lapices", "Borradores","Sacapuntas");<br>
            $arrlength = count($cars);<br>
            for($x = 0; $x < $arrlength; $x++) <br>
            {<br>
            echo $cars[$x];<br>
            }
        </p>
        <h2>Impresion de matriz</h2>
        <p class="cuento parrafo1">
        <?php
        $cars = array("Cuadernos", "Lapices", "Borradores","Sacapuntas");
        $arrlength = count($cars);
        for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
        ?>
        </p>
        <a href="\CM150518_MS132476_GUIA4\Complementaria.php">Regresar</a>
    </div>
    
</body>
</html>