<!DOCTYPE html>
<html lang="es">
<head>
<title>Investigacion Complementaria</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Ejemplo de funciones</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
            <h2>Codigo PHP-Usando Funciones</h2>
            <h3>Ejemplo usando rsort</h3>
            $cars = array("Volvo", "BMW", "Toyota");<br>
            rsort($cars);<br>
            $clength = count($cars);<br>
            for($x = 0; $x < $clength; $x++) {<br>
            echo $cars[$x];<br>
            }
            <h3>Ejemplo usando asort</h3>
            $age = array("Ben"=>"37", "Joe"=>"43","Peter"=>"35");<br>
            asort($age);<br>
            foreach($age as $x => $x_value) {<br>
            echo "Key=" . $x . ", Value=" . $x_value;<br>
            }
        </p>
        <h2>Impresion de matriz</h2>
        <p class="cuento parrafo1">
            <h3>Ejemplo usando rsort</h3>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);
        
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
          echo $cars[$x];
          echo "<br>";
        }
        ?>
         <h3>Ejemplo usando asort</h3>
        </p>
        <?php
        $age = array("Ben"=>"37", "Joe"=>"43","Peter"=>"35");
        asort($age);
        
        foreach($age as $x => $x_value) {
          echo "Key=" . $x . ", Value=" . $x_value;
          echo "<br>";
        }
        ?>
        <a href="\CM150518_MS132476_GUIA4\Complementaria.php">Regresar</a>
    </div>
</body>
</html>