<?php

    print_r("VARIABLES");

    /*
    Puedes utilizar variables para almacenar y manipular diferentes tipos de datos
    como cadenas de texto, números, valores booleanos y más
    Además, las variables en PHP pueden cambiar de tipo durante la ejecución del programa 
    ya que PHP es un lenguaje de tipado dinámico.
    */

   


    /*
    Enteros (int): Representan números enteros sin decimales, positivos o negativos.
    */

    $edad = 25;
    $cantidad = -10;

    


    /*
    Flotantes (float): Representan números con decimales.
    */

    $precio = 12.99;
    $pi = 3.1416;

    


    /*
    Cadenas (string): Representan secuencias de caracteres entre comillas simples o dobles.
    */

    $nombre = "Juan";
    $mensaje = '¡Hola, bienvenido!';

    


    /*
    Booleanos (bool): Representan un valor verdadero (true) o falso (false).
    */

    $activo = true;
    $validado = false;

    


    /*
    Arrays: Almacenan múltiples valores en una sola variable.
    */

    $numeros = array(1, 2, 3, 4, 5);
    $frutas = ['manzana', 'naranja', 'pera'];

    


    /*
    Objetos (object): Representan una instancia de una clase y contienen propiedades y métodos.
    */

    class Persona {
        public $nombre;
        public $edad;
    }
      
      $persona = new Persona();
      $persona->nombre = "Juan";
      $persona->edad = 25;

      


    /*
    NULL: Representa la ausencia de un valor.
    */

    $variable = null;



    /*
    $_GET: Contiene los parámetros de la URL enviados mediante el método GET.
    */

    // URL: ejemplo.php?nombre=Juan&edad=25
    echo $_GET['nombre']; // Salida: Juan
    echo $_GET['edad']; // Salida: 25




    /*
    $_POST: Contiene los datos enviados a través de un formulario HTML mediante el método POST.
    */

    // Formulario HTML: <form action="procesar.php" method="POST">...</form>
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];




    /*
    $_SESSION: Almacena y mantiene variables de sesión a lo largo de diferentes páginas.
    */

    // Iniciar sesión
    session_start();

    // Almacenar datos en la sesión
    $_SESSION['usuario'] = 'Juan';
    $_SESSION['rol'] = 'admin';

    // Acceder a los datos de la sesión
    echo $_SESSION['usuario']; // Salida: Juan
    echo $_SESSION['rol']; // Salida: admin




    /*
    $_COOKIE: Contiene los valores de las cookies enviadas al servidor.
    */

    // Obtener el valor de una cookie
    $idioma = $_COOKIE['idioma'];

    // Configurar una cookie
    setcookie('idioma', 'es', time() + 3600); // Caduca en 1 hora




    /*
    $_SERVER: Contiene información sobre el entorno del servidor y la solicitud HTTP actual.
    */

    echo $_SERVER['SERVER_NAME']; // Salida: localhost
    echo $_SERVER['REQUEST_METHOD']; // Salida: GET o POST
    




    /*
    $_FILES: Contiene información sobre los archivos subidos al servidor a través de un formulario HTML.
    */

    // Formulario HTML: <form action="procesar.php" method="POST" enctype="multipart/form-data">...</form>
    $archivo = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamaño = $_FILES['archivo']['size'];




    /*
    $_ENV: Contiene variables de entorno del sistema.
    */

    $directorioTemp = $_ENV['TMP'];
    $usuario = $_ENV['USER'];




    /*
    $_REQUEST: Contiene los valores de las variables enviadas por GET, POST y COOKIE.
    */

    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    



    /*
    $GLOBALS: Contiene todas las variables globales definidas en el ámbito global del script.
    */

    $globalVariable = 'Hola, soy una variable global';

    function imprimirGlobal() {
      echo $GLOBALS['globalVariable'];
    }
    
    imprimirGlobal(); // Salida: Hola, soy una variable global
    
?>