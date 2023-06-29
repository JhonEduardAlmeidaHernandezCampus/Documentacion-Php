<?php

    print_r("ARREGLOS");


    /*
    Arreglos indexados:
        Los arreglos indexados son aquellos en los que los elementos se acceden mediante un índice numérico.
        Los índices comienzan desde cero y se incrementan en una unidad.
    */

    $arreglo = array("Manzana", "Banana", "Naranja");
    echo $arreglo[0]; // Resultado: "Manzana"


    

    /*
    Arreglos asociativos:
        Los arreglos asociativos son aquellos en los que los elementos se acceden mediante claves (nombres o etiquetas) en lugar de índices numéricos.
        Cada elemento del arreglo tiene una clave única asociada.
    */

    $arreglo = array("nombre" => "Juan", "edad" => 30, "ciudad" => "México");
    echo $arreglo["nombre"]; // Resultado: "Juan"
    
    


    /*
    Arreglos multidimensionales:
        Los arreglos multidimensionales son aquellos que contienen otros arreglos como elementos.
        Permiten crear estructuras de datos más complejas, como matrices o tablas.
    */

    $arreglo = array(
        array("Manzana", "Banana"),
        array("Naranja", "Limón"),
        array("Fresa", "Cereza")
    );
    echo $arreglo[1][0]; // Resultado: "Naranja"
    

    

    /*
    Arreglos de tipo mixto:
        Los arreglos de tipo mixto son aquellos en los que se combinan elementos indexados y asociativos.
        Pueden contener tanto valores numéricos como elementos con claves asociativas.
    */

    $arreglo = array("Manzana", "nombre" => "Juan", 3 => "Naranja");
    echo $arreglo[0]; // Resultado: "Manzana"
    echo $arreglo["nombre"]; // Resultado: "Juan"
    echo $arreglo[3]; // Resultado: "Naranja"




    /*
    Módulo (%): Se utiliza para obtener el resto de una división.
    */

    $resultado = 10 % 3; // $resultado será igual a 1 (el resto de la división de 10 entre 3)

    


                    /* Estructuras de control */


    /*
    Estructura de control if-else:
        Permite ejecutar un bloque de código si se cumple una condición, y otro bloque de código si no se cumple.
    */

    $edad = 25;
    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }




    /*
    Estructura de control switch:
        Permite evaluar múltiples casos y ejecutar un bloque de código según el caso que se cumpla.
    */

    $dia = "Lunes";
    switch ($dia) {
        case "Lunes":
            echo "Hoy es lunes.";
            break;
        case "Martes":
            echo "Hoy es martes.";
            break;
        default:
            echo "Hoy no es ni lunes ni martes.";
    }




    /*
    Estructura de control for:
        Permite ejecutar un bloque de código un número específico de veces, controlado por un contador.
    */

    for ($i = 1; $i <= 5; $i++) {
        echo "El valor de i es: " . $i . "<br>";
    }
    



    /*
    Estructura de control while:
        Permite ejecutar un bloque de código mientras se cumpla una condición.
    */

    $contador = 1;
    while ($contador <= 5) {
        echo "El valor del contador es: " . $contador . "<br>";
        $contador++;
    }
    



    /*
    Estructura de control do-while:
        Permite ejecutar un bloque de código al menos una vez y luego repetirlo mientras se cumpla una condición.
    */

    $contador = 1;
    do {
        echo "El valor del contador es: " . $contador . "<br>";
        $contador++;
    } while ($contador <= 5);

?>