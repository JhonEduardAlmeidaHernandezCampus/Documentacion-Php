<?php

    print_r("CARACTERISTICAS ");

    // Fácil integración con HTML
    /*
    -Fácil integración con HTML
    -Amplia compatibilidad
    -Soporte de bases de datos
    -Soporte para protocolos de red
    */

    print_r("FUNCIONES");

    /*
    echo = Muestra uno o más valores en el navegador.
    */

    $mensaje = "¡Hola, mundo!";
    echo $mensaje;




    /*
    print = Imprime una cadena.
    */

    $nombre = "Juan";
    print("Mi nombre es " . $nombre);




    /*
    strlen = Devuelve la longitud de una cadena.
    */

    $cadena = "Hola";
    $longitud = strlen($cadena);
    echo $longitud; // Salida: 4




    /*
    strpos = Encuentra la posición de la primera aparición de un subtring dentro de una cadena.
    */

    $cadena = "Hola, mundo";
    $posicion = strpos($cadena, "mundo");
    echo $posicion; // Salida: 6




    /*
    array = Crea un nuevo array.
    */

    $numeros = array(1, 2, 3, 4, 5);
    echo $numeros[2]; // Salida: 3




    /*
    count = Devuelve el número de elementos en un array.
    */

    $numeros = array(1, 2, 3, 4, 5);
    $cantidad = count($numeros);
    echo $cantidad; // Salida: 5
    



    /*
    is_numeric = Verifica si un valor es numérico.
    */

    $numero = 10;
    if (is_numeric($numero)) {
        echo "Es un número";
    } else {
        echo "No es un número";
    }




    /*
    date =  Formatea la fecha y hora actual.
    */

    $fecha_actual = date("d/m/Y");
    echo $fecha_actual;




    /*
    file_get_contents = Lee el contenido de un archivo y lo devuelve como una cadena.
    */

    $contenido = file_get_contents("archivo.txt");
    echo $contenido;




    /*
    json_encode = Convierte un array en formato JSON.
    */

    $datos = array("nombre" => "Juan", "edad" => 25);
    $json = json_encode($datos);
    echo $json; // Salida: {"nombre":"Juan","edad":25}





    /*
    print = Se utiliza para imprimir un solo valor en la salida
    */

    $edad = 17;
    print $edad;  // Imprime: 17




    /*
    printf = Se utiliza para imprimir una cadena de texto formateada según un formato especificado.
    */

    $edadJ = 19;
    printf("La edad de jose es: %s", $edadJ);  // Imprime: la edad de jose es: 19




    /*
    var_dump = Muestra información detallada sobre una variable, incluyendo su tipo y valor. 
    */

    $array = [1, 2, 3];
    var_dump($array);
    /* Imprime:
                array(3) {
                [0]=>
                int(1)
                [1]=>
                int(2)
                [2]=>
                int(3)
                }
    */




    /*
    print_r = Se utiliza para imprimir información sobre una variable de una manera más legible para los humanos
    */

    $persona = array("nombre" => "María", "edad" => 30);
    print_r($persona);
    /* Imprime: Array ( [nombre] => María [edad] => 30 )*/




    /*
    str_replace(): Reemplaza todas las apariciones de un substring en una cadena con otro substring.
    */

    $cadena = "Hola mundo";
    $nueva_cadena = str_replace("mundo", "amigo", $cadena);
    echo $nueva_cadena; // Salida: Hola amigo




    /*
    strtolower(): Convierte una cadena a minúsculas.
    */

    $cadena = "Hola Mundo";
    $nueva_cadena = strtolower($cadena);
    echo $nueva_cadena; // Salida: hola mundo

    


    /*
    strtoupper(): Convierte una cadena a mayúsculas.
    */

    $cadena = "Hola Mundo";
    $nueva_cadena = strtoupper($cadena);
    echo $nueva_cadena; // Salida: HOLA MUNDO




    /*
    trim(): Elimina los espacios en blanco o caracteres específicos del principio y el final de una cadena.
    */

    $cadena = "   Hola Mundo   ";
    $nueva_cadena = trim($cadena);
    echo $nueva_cadena; // Salida: Hola Mundo

    

    
    /*
    explode(): Divide una cadena en un array utilizando un delimitador.
    */

    $cadena = "Manzana,Naranja,Pera";
    $frutas = explode(",", $cadena);
    echo $frutas[1]; // Salida: Naranja




    /*
    implode(): Combina los elementos de un array en una cadena utilizando un separador.
    */

    $frutas = array("Manzana", "Naranja", "Pera");
    $cadena = implode(", ", $frutas);
    echo $cadena; // Salida: Manzana, Naranja, Pera

    


    /*
    array_push(): Añade uno o más elementos al final de un array.
    */

    $numeros = array(1, 2, 3);
    array_push($numeros, 4, 5);
    print_r($numeros); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    



    /*
    array_pop(): Elimina y devuelve el último elemento de un array.
    */

    $numeros = array(1, 2, 3, 4, 5);
    $ultimo_elemento = array_pop($numeros);
    echo $ultimo_elemento; // Salida: 5
    



    /*
    count(): Devuelve el número de elementos en un array o el número de propiedades en un objeto.
    */
    
    $array = [1, 2, 3, 4, 5];
    $cantidad = count($array);
    echo $cantidad; // Salida: 5




    /*
    array_merge(): Combina dos o más arrays en uno solo.
    */

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $resultado = array_merge($array1, $array2);
    print_r($resultado); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

    


    /*
    array_search(): Busca un valor específico en un array y devuelve su clave correspondiente si se encuentra.
    */

    $array = ['a', 'b', 'c'];
    $clave = array_search('b', $array);
    echo $clave; // Salida: 1

    


    /*
    sort(): Ordena un array en orden ascendente.
    */

    $array = [3, 1, 2, 5, 4];
    sort($array);
    print_r($array); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

    


    /*
    rsort(): Ordena un array en orden descendente.
    */

    $array = [3, 1, 2, 5, 4];
    rsort($array);
    print_r($array); // Salida: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
    



    /*
    file_exists(): Verifica si un archivo o directorio existe.
    */

    $existe = file_exists('archivo.txt');
    if ($existe) {
        echo "El archivo existe";
    } else {
        echo "El archivo no existe";
    }




    /*
    is_array(): Verifica si una variable es un array.
    */

    $array = [1, 2, 3];
    if (is_array($array)) {
      echo "Es un array";
    } else {
      echo "No es un array";
    }
    



    /*
    substr(): Devuelve una parte de una cadena.
    */

    $cadena = "Hola mundo";
    $subcadena = substr($cadena, 0, 4);
    echo $subcadena; // Salida: Hola

    


    /*
    file_put_contents(): Escribe datos en un archivo.
    */

    $contenido = "Hola mundo";
    file_put_contents("archivo.txt", $contenido);
    



    /*
    array_key_exists(): Verifica si una clave existe en un array.
    */

    $array = array("clave1" => "valor1", "clave2" => "valor2");
    if (array_key_exists("clave1", $array)) {
      echo "La clave existe";
    } else {
      echo "La clave no existe";
    }
    



    /*
    in_array(): Verifica si un valor existe en un array.
    */

    $array = array("manzana", "naranja", "pera");
    if (in_array("manzana", $array)) {
      echo "El valor existe";
    } else {
      echo "El valor no existe";
    }
    




    /*
    shuffle(): Mezcla aleatoriamente los elementos de un array.
    */

    $array = array(1, 2, 3, 4, 5);
    shuffle($array);
    print_r($array);
    



    /*
    implode(): Convierte un array en una cadena utilizando un delimitador.
    */

    $array = array("manzana", "naranja", "pera");
    $cadena = implode(", ", $array);
    echo $cadena; // Salida: manzana, naranja, pera
    
?>