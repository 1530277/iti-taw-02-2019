<?php
    #CLASE
    //Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado o identidad.
    class Automovil{
        //PROPIEDADES: Caracteristicas que pueden tener un obejto
        public $marca;
        public $modelo;

        //MEDOTOS: Es el algoritmo asociado a un objeto que indica la capacidad de  lo que este puede hacer, la única diferencia entre el método y funnción es que llamamos al método a FUNCIONES de una clase (en POO), mientras que llamamos funciones a los algoritmos de la programación estructurada.
        public function mostrar(){
            echo "<p> Hola soy un $this->marca, marca $this->modelo </p>";
        }
    }
    //OBJETOS: Es una entidad provista por métodos o mensajes a los cuales responde propiedades con valores concretos.
    $a = new Automovil();
    $a->marca='Chevrolet';
    $a->modelo='Chevy';
    $a->mostrar();
    
    $b = new Automovil();
    $b->marca='Ford';
    $b->modelo='Lobo';
    $b->mostrar();
    
    $c = new Automovil();
    $c->marca='Honda';
    $c->modelo='CRV';
    $c->mostrar();

    /* 
        Principios de la POO que se cumplen en este ejemplo:
            1. ABSTRACCIÓN: Nuevos tipos de dato(el que quieras lo creas).
            2. ENCAPSULACIÓN: Organiza el código en grupos lógicos.
            3. OCULTAMIENTO: Oculta detalles de la implementación y expone solo los detalles que sean necesarios.
        */
        
?>