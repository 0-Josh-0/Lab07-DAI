<?php
//creando una clase Automovil
class Automovil{
    //declaramos los atributos
    public $placa;
    public $marca;
    public $color;
    public $precio;
    //declaramos los métodos
    function acelerar(){
        echo 'Acelerar la Marcha';
    }
    function girarDerecha(){
        echo '<br> Girando a la derecha';
    }
    function calcularPrecio(){
        return $this->precio * 1.18;
    }
}

?>