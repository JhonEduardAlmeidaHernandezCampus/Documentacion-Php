<?php

    print_r("POO");


    /*
    es un paradigma de programación que se utiliza para organizar y estructurar el código de manera modular y reutilizable 
    En PHP, la POO se basa en la definición de clases, que son estructuras que encapsulan propiedades (variables) y métodos (funciones) relacionados
    */

    /*
    Clase: Es una plantilla o molde que define la estructura y el comportamiento de los objetos que se crearán a partir de ella. 
    Una clase se compone de propiedades (variables) y métodos (funciones) que representan los atributos y acciones del objeto.
    */

    /*
    Objeto: Es una instancia concreta de una clase. Representa un elemento con estado (propiedades) y comportamiento (métodos). 
    Los objetos se crean utilizando el operador new seguido del nombre de la clase.
    */

    /*
    Propiedad: Es una variable que pertenece a un objeto y almacena su estado o características. 
    Cada objeto tiene su propia copia de las propiedades de la clase. 
    Las propiedades también se conocen como atributos o variables de instancia.
    */

    /*
    Método: Es una función definida dentro de una clase que describe el comportamiento o las acciones que los objetos de esa clase pueden realizar. 
    Los métodos pueden acceder y manipular las propiedades del objeto.
    */

    class Persona {
        // Propiedades
        public $nombre;
        public $edad;
    
        // Métodos
        public function saludar() {
            echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
        }
    }
    
    // Crear objeto de la clase Persona
    $persona1 = new Persona();
    
    // Acceder y modificar las propiedades
    $persona1->nombre = "Juan";
    $persona1->edad = 30;
    
    // Llamar al método del objeto
    $persona1->saludar(); // Salida: "Hola, mi nombre es Juan y tengo 30 años."
    
?>