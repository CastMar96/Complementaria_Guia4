<!DOCTYPE html>
<html lang="es">
<head>
<title>Investigacion Complementaria</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Ejemplo de una matriz Bidimensional</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
            <h2>Codigo PHP-Matriz Bidimensional</h2>
            $cars = array (<br>
        array("Toyota",22,18),<br>
        array("Honda",15,13),<br>
        array("Nissan",5,2),<br>
        array("Mitsubishi",17,15)<br>
        );<br>
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].;<br>
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].;<br>
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].;<br>
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].;<br>
        </p>
        <h2>Impresion de matriz</h2>
        <p class="cuento parrafo1">
        <?php
        $cars = array (
        array("Toyota",22,18),
        array("Honda",15,13),
        array("Nissan",5,2),
        array("Mitsubishi",17,15)
        );
        
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        ?>
        </p>
        <a href="\CM150518_MS132476_GUIA4\Complementaria.php">Regresar</a>
    </div>
</body>
</html>