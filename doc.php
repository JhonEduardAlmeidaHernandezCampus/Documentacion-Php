<?php

    print_r("CONSTANTES");

    /*
    es un identificador (nombre) asociado a un valor que no puede cambiar durante la ejecución del script.
    */

   


    /*
    Constantes numéricas:
    */

    define("PI", 3.1416);
    define("GRAVEDAD", 9.8);




    /*
    Constantes de cadena de texto:
    */

    $define("SALUDO", "Hola, bienvenido");
    define("NOMBRE_EMPRESA", "Mi Empresa");    

    


    /*
    Constantes booleanas:
    */

    define("VERDADERO", true);
    define("FALSO", false);


    

    /*
    Constantes de arreglo:
    */

    define("COLORES", ['rojo', 'verde', 'azul']);
    define("MESES", array('enero', 'febrero', 'marzo'));

    


    /*
    Constantes predefinidas:
    */

    echo PHP_VERSION; // Muestra la versión de PHP instalada
    echo PHP_OS; // Muestra el sistema operativo en el que se está ejecutando PHP

    


    /*
    Constantes de fecha y tiempo:
    */

    define("FECHA_ACTUAL", date("Y-m-d"));
    define("HORA_ACTUAL", date("H:i:s"));


      

    /*
    Constantes de rutas de archivos y directorios:
    */

    define("RUTA_ARCHIVOS", "/var/www/archivos/");
    define("RUTA_IMAGENES", RUTA_ARCHIVOS . "imagenes/");




    /*
    Constantes de expresiones regulares:
    */

    define("PATRON_EMAIL", "/^[\w-]+(\.[\w-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i");




    /*
    Constantes de configuración:
    */

    define("TAMANO_MAXIMO", 1024); // Tamaño máximo permitido en kilobytes
    define("NUMERO_INTENTOS", 3); // Número máximo de intentos permitidos




    /*
    Constantes de valores especiales:
    */

    define("NULO", null);
    define("INFINITO_POSITIVO", INF);
    define("INFINITO_NEGATIVO", -INF);
    
?>