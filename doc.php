<?php

    print_r("OPERADORES");


                    /* Operadores aritméticos */

    /*
    Suma (+): Se utiliza para sumar dos valores.
    */

    $resultado = 10 + 5; // $resultado será igual a 15




    /*
    Resta (-): Se utiliza para restar un valor de otro.
    */

    $resultado = 10 - 5; // $resultado será igual a 5
    
    


    /*
    Multiplicación (*): Se utiliza para multiplicar dos valores.
    */

    $resultado = 10 * 5; // $resultado será igual a 50


    

    /*
    División (/): Se utiliza para dividir un valor por otro.
    */

    $resultado = 10 / 5; // $resultado será igual a 2

    


    /*
    Módulo (%): Se utiliza para obtener el resto de una división.
    */

    $resultado = 10 % 3; // $resultado será igual a 1 (el resto de la división de 10 entre 3)

    


                    /* Operadores comparación */

    /*
    Asignación (=): Se utiliza para asignar un valor a una variable.
    */

    $x = 10; // La variable $x tendrá el valor 10


      

    /*
    Asignación de suma (+=): Se utiliza para sumar un valor a una variable y asignar el resultado a la misma variable.
    */

    $x = 5;
    $x += 3; // Equivale a $x = $x + 3; La variable $x tendrá el valor 8




    /*
    Asignación de resta (-=): Se utiliza para restar un valor a una variable y asignar el resultado a la misma variable.
    */

    $x = 10;
    $x -= 4; // Equivale a $x = $x - 4; La variable $x tendrá el valor 6    




    /*
    Asignación de multiplicación (*=): Se utiliza para multiplicar una variable por un valor y asignar el resultado a la misma variable.
    */

    $x = 3;
    $x *= 2; // Equivale a $x = $x * 2; La variable $x tendrá el valor 6




    /*
    Asignación de división (/=): Se utiliza para dividir una variable por un valor y asignar el resultado a la misma variable.
    */

    $x = 10;
    $x /= 5; // Equivale a $x = $x / 5; La variable $x tendrá el valor 2




    /*
    Asignación de división (/=): Se utiliza para dividir una variable por un valor y asignar el resultado a la misma variable.
    */

    $x = 10;
    $x %= 3; // Equivale a $x = $x % 3; La variable $x tendrá el valor 1 (resto de la división de 10 entre 3)

    


                        /* Operadores comparación */


    /*
    Igual (==): Se utiliza para comprobar si dos valores son iguales.
    */

    $x = 5;
    $y = 5;
    $resultado = ($x == $y); // $resultado será igual a true




    /*
    Desigualdad (!=): Compara si dos valores no son iguales.
    */

    $x = 5;
    $y = 10;
    $resultado = ($x != $y); // $resultado será igual a true

    


    /*
    Mayor que (>): Compara si el primer valor es mayor que el segundo.
    */

    $x = 10;
    $y = 5;
    $resultado = ($x > $y); // $resultado será igual a true




    /*
    Menor que (<): Compara si el primer valor es menor que el segundo.
    */

    $x = 10;
    $y = 5;
    $resultado = ($x < $y); // $resultado será igual a false
    



    /*
    Mayor o igual que (>=): Compara si el primer valor es mayor o igual que el segundo.
    */

    $x = 10;
    $y = 10;
    $resultado = ($x >= $y); // $resultado será igual a true
    



    /*
    Menor o igual que (<=): Compara si el primer valor es menor o igual que el segundo.
    */

    $x = 10;
    $y = 5;
    $resultado = ($x <= $y); // $resultado será igual a false
    





                            /* Operadores comparación */


    /*
    Y lógico (&& o and): Verifica si se cumplen dos condiciones.
    */

    $x = 5;
    $y = 10;
    $resultado = ($x > 0) && ($y < 20); // $resultado será igual a true, ya que ambas condiciones se cumplen
    



    /*
    O lógico (|| o or): Verifica si se cumple al menos una de dos condiciones.
    */

    $x = 5;
    $y = 10;
    $resultado = ($x > 0) || ($y < 5); // $resultado será igual a true, ya que al menos una de las condiciones se cumple (la primera condición es verdadera)




    /*
    Negación lógica (! o not): Invierte el valor de una condición.
    */
    
    $x = 5;
    $resultado = !($x > 0); // $resultado será igual a false, ya que la condición original es verdadera, pero se invierte con el operador de negación

?>