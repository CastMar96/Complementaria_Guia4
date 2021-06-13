<!DOCTYPE html>
<html lang="es">
<head>
<title>Investigacion Complementaria</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Matrices Unidimensionales y bidimensionales</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
        Una Matriz unidimensional, también conocida como vector es una variable estructurada
        formada de un número "n" de variables simples del mismo tipo que son denominadas
        los componentes o elementos del array. El número de componentes "n" es, entonces, la
        dimensión del array.<br>
        Una vector se utiliza básicamente cuando queremos tener, por ejemplo, una
        secuencia de números reunidos en una sola variable.<br>
        <br>
        Ejemplo de una <a href="\CM150518_MS132476_GUIA4\unidimensional.php">Matriz Unidimensional</a>
        </p>
    </div>
    <div class="contenido">
        <p class="cuento parrafo1">
        Una Matriz Bidimensional, puede tener una, dos o más dimensiones.
        un array de dos dimensiones también denominado matriz, es interpretado como un array (umidimensional) de dimensión "f" (número de filas), donde cada componente es un
        array (unidimensional) de dimensión "c" (número de columnas).<br>
        Este tipo de matrices Se usan para representar datos que pueden verse como una tabla con filas y columnas.<br>
        <br>
        Ejemplo de una <a href="\CM150518_MS132476_GUIA4\bidimensional.php">Matriz Bidimensional</a>
        </p>
    </div>
    <h1>Matrices Asociativas</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
        Las matrices asociativas se utilizan para representar conjuntos de elementos de datos que se pueden recuperar especificando un nombre llamado clave.<br>
        Las matrices asociativas de D están formadas por una lista de valores de expresiones escalares llamadas tuplas. Puede considerar que una tupla de matriz es como una lista de parámetros imaginarios de una función que se ejecuta para recuperar el valor de matriz correspondiente cuando se hace referencia a la matriz. Cada matriz asociativa de D tiene una firma clave que incluye un número fijo de elementos de tupla, donde cada elemento tiene un tipo concreto fijo. Puede definir distintas firmas clave para cada matriz en los programas escritos en D.
        Las matrices asociativas difieren de las matrices normales de tamaño fijo en que no tienen un límite predefinido en el número de elementos
        <br>
        <br>
        Ejemplo de una <a href="\CM150518_MS132476_GUIA4\asociativa.php">Matriz Asocitiva</a>
        </p>
    </div>
    <h1>Funciones para manejo de matrices</h1>
    <div class="contenido">
        <p class="cuento parrafo1">
        <br>
        Ejemplo de uso de <a href="\CM150518_MS132476_GUIA4\funciones.php">funciones para matrices </a>
        <table class="table">
            <tr>
                <th>Nombre Funcion</th>
                <th>Descripción</th>
            </tr>
            <tr>
                <td>array</td>
                <td>Crea un array</td>
            </tr>
            <tr>
                <td>arsort</td>
                <td>Ordena un array en orden inverso y mantiene la asociación de índices</td>
            </tr>
            <tr>
                <td>asort</td>
                <td>Ordena un array y mantiene la asociación de índices</td>
            </tr>
            <tr>
                <td>compact</td>
                <td>Crear un array que contiene variables y sus valores</td>
            </tr>
            <tr>
                <td>count</td>
                <td>Cuenta todos los elementos de un array o algo de un objeto</td>
            </tr>
            <tr>
                <td>current</td>
                <td>Devuelve el elemento actual en un array</td>
            </tr>
            <tr>
                <td>each</td>
                <td>Devolver el par clave/valor actual de un array y avanzar el cursor del array</td>
            </tr>
            <tr>
                <td>end</td>
                <td>Establece el puntero interno de un array a su último elemento</td>
            </tr>
            <tr>
                <td>extract</td>
                <td>Importar variables a la tabla de símbolos actual desde un array</td>
            </tr>
            <tr>
                <td>in_array</td>
                <td>Comprueba si un valor existe en un array</td>
            </tr>
            <tr>
                <td>key_exists</td>
                <td>Alias de array_key_exists</td>
            </tr>
            <tr>
                <td>key</td>
                <td>Obtiene una clave de un array</td>
            </tr>
            <tr>
                <td>krsort</td>
                <td>Ordena un array por clave en orden inverso</td>
            </tr>
            <tr>
                <td>ksort</td>
                <td>Ordena un array por clave</td>
            </tr>
            <tr>
                <td>list</td>
                <td>Asignar variables como si fueran un array</td>
            </tr>
            <tr>
                <td>natcasesort</td>
                <td>Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas</td>
            </tr>
            <tr>
                <td>natsort</td>
                <td>Ordena un array usando un algoritmo de "orden natural"</td>
            </tr>
            <tr>
                <td>next</td>
                <td>Avanza el puntero interno de un array</td>
            </tr>
            <tr>
                <td>pos</td>
                <td>Alias de current</td>
            </tr>
            <tr>
                <td>prev</td>
                <td>Rebobina el puntero interno del array</td>
            </tr>
            <tr>
                <td>range</td>
                <td>Crear un array que contiene un rango de elementos</td>
            </tr>
            <tr>
                <td>reset</td>
                <td>Establece el puntero interno de un array a su primer elemento</td>
            </tr>
            <tr>
                <td>rsort</td>
                <td>Ordena un array en orden inverso</td>
            </tr>
            <tr>
                <td>shuffle</td>
                <td>Mezcla un array</td>
            </tr>
            <tr>
                <td>sizeof</td>
                <td>Alias de count</td>
            </tr>
            <tr>
                <td>sort</td>
                <td>Ordena un array</td>
            </tr>
            <tr>
                <td>uasort</td>
                <td>Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices</td>
            </tr>
            <tr>
                <td>uksort</td>
                <td>Ordena un array según sus claves usando una función de comparación definida por el usuario</td>
            </tr>
            <tr>
                <td>usort</td>
                <td>Ordena un array según sus valores usando una función de comparación definida por el usuario</td>
            </tr>
            <tr>
                <td>array_change_key_case </td>
                <td>Cambia a mayúsculas o minúsculas todas las claves en un array</td>
            </tr>
            <tr>
                <td>array_chunk</td>
                <td>Divide un array en fragmentos</td>
            </tr>
            <tr>
                <td>array_column</td>
                <td>Devuelve los valores de una sola columna del array de entrada</td>
            </tr>
            <tr>
                <td>array_combine</td>
                <td>Crea un nuevo array, usando una matriz para las claves y otra para sus valores</td>
            </tr>
            <tr>
                <td>array_count_values</td>
                <td>Cuenta todos los valores de un array</td>
            </tr>
            <tr>
                <td>array_diff_assoc</td>
                <td>Calcula la diferencia entre arrays con un chequeo adicional de índices</td>
            </tr>
            <tr>
                <td>array_diff_key</td>
                <td>Calcula la diferencia entre arrays empleando las claves para la comparación</td>
            </tr>
            <tr>
                <td>array_diff_uassoc</td>
                <td>Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario</td>
            </tr>
            <tr>
                <td>array_diff_ukey</td>
                <td>Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación</td>
            </tr>
            <tr>
                <td>array_diff </td>
                <td>Calcula la diferencia entre arrays</td>
            </tr>            
            <tr>
                <td>array_fill_keys</td>
                <td>Llena un array con valores, especificando las keys</td>
            </tr>
            <tr>
                <td>array_fill</td>
                <td>Llena un array con valores</td>
            </tr>
            <tr>
                <td>array_filter</td>
                <td>Filtra elementos de un array usando una función de devolución de llamada</td>
            </tr>
            <tr>
                <td>array_flip</td>
                <td>Intercambia todas las claves de un array con sus valores asociados</td>
            </tr>
            <tr>
                <td>array_intersect_assoc</td>
                <td>Calcula la intersección de arrays con un chequeo adicional de índices</td>
            </tr>
            <tr>
                <td>array_intersect_key</td>
                <td>Calcula la intersección de arrays usando sus claves para la comparación</td>
            </tr>
            <tr>
                <td>array_intersect_uassoc </td>
                <td>Calcula la intersección de arrays con una comprobación adicional de índices, los cuales se comparan con una función de retrollamada</td>
            </tr>
            <tr>
                <td>array_intersect_ukey</td>
                <td>Calcula la intersección de arrays usando una función de devolución de llamada en las claves para la comparación</td>
            </tr>
            <tr>
                <td>array_intersect</td>
                <td>Calcula la intersección de arrays</td>
            </tr>
            <tr>
                <td>array_key_exists</td>
                <td>Verifica si el índice o clave dada existe en el array</td>
            </tr>
            <tr>
                <td>array_key_first</td>
                <td>Obtiene la primera clave de un array</td>
            </tr>
            <tr>
                <td>array_key_last </td>
                <td>Obtiene la última clave de un array</td>
            </tr>
            <tr>
                <td>array_keys</td>
                <td>Devuelve todas las claves de un array o un subconjunto de claves de un array</td>
            </tr>
            <tr>
                <td>array_map</td>
                <td>Aplica la retrollamada a los elementos de los arrays dados</td>
            </tr>
            <tr>
                <td>array_merge_recursive</td>
                <td>Une dos o más arrays recursivamente</td>
            </tr>
            <tr>
                <td>array_merge</td>
                <td>array_multisort </td>
            </tr>
            <tr>
                <td>array_pad</td>
                <td>Rellena un array a la longitud especificada con un valor</td>
            </tr>
            <tr>
                <td>array_pop</td>
                <td>Extrae el último elemento del final del array</td>
            </tr>
            <tr>
                <td>array_product</td>
                <td> Calcula el producto de los valores de un array</td>
            </tr>
            <tr>
                <td>array_push</td>
                <td>Inserta uno o más elementos al final de un array</td>
            </tr>
            <tr>
                <td>array_rand</td>
                <td>Seleccionar una o más claves aleatorias de un array</td>
            </tr>
            <tr>
                <td>array_reduce</td>
                <td>Reduce iterativamente un array a un solo valor usando una función llamada de retorno</td>
            </tr>
            <tr>
                <td>array_replace_recursive</td>
                <td>Reemplaza los elementos de los arrays pasados al primer array de forma recursiva</td>
            </tr>
            <tr>
                <td>array_replace</td>
                <td>Reemplaza los elementos del array original con elementos de array adicionales</td>
            </tr>
            <tr>
                <td>array_reverse</td>
                <td>Devuelve un array con los elementos en orden inverso</td>
            </tr>
            <tr>
                <td>array_search</td>
                <td>Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito</td>
            </tr>
            <tr>
                <td>array_shift</td>
                <td>Quita un elemento del principio del array</td>
            </tr>
            <tr>
                <td>array_slice</td>
                <td>Extraer una parte de un array</td>
            </tr>
            <tr>
                <td>array_splice</td>
                <td>Elimina una porción del array y la reemplaza con otra cosa</td>
            </tr>
            <tr>
                <td>array_sum</td>
                <td>Calcular la suma de los valores de un array</td>
            </tr>
            <tr>
                <td>array_udiff_assoc</td>
                <td>Computa la diferencia entre arrays con una comprobación de indices adicional, compara la información mediante una función de llamada de retorno</td>
            </tr>
            <tr>
                <td>array_udiff_uassoc</td>
                <td>Computa la diferencia entre arrays con una verificación de índices adicional, compara la información y los índices mediante una función de llamada de retorno</td>
            </tr>
            <tr>
                <td>array_udiff</td>
                <td>Computa la diferencia entre arrays, usando una llamada de retorno para la comparación de datos</td>
            </tr>
            <tr>
                <td>array_uintersect_assoc</td>
                <td>Calcula la intersección de arrays con una comprobación de índices adicional, compara la información mediante una función de retrollamada</td>
            </tr>
            <tr>
                <td>array_uintersect_uassoc</td>
                <td>Calcula la intersección de arrays con una comprobación de índices adicional, compara la información y los índices mediante funciones de retrollamada por separado</td>
            </tr>
            <tr>
                <td>array_uintersect</td>
                <td>Computa una intersección de arrays, compara la información mediante una función de llamada de retorno</td>
            </tr>
            <tr>
                <td>array_unique</td>
                <td>Elimina valores duplicados de un array</td>
            </tr>
            <tr>
                <td>array_unshift</td>
                <td>Añadir al inicio de un array uno a más elementos</td>
            </tr>
            <tr>
                <td>array_values</td>
                <td>Devuelve todos los valores de un array</td>
            </tr>
            <tr>
                <td>array_walk_recursive</td>
                <td>Aplicar una función de usuario recursivamente a cada miembro de un array</td>
            </tr>
            <tr>
                <td>array_walk </td>
                <td>Aplicar una función proporcionada por el usuario a cada miembro de un array</td>
            </tr>
        </table>
      
        </p>
    </div>
</body>
</html>