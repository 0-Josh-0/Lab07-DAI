<?php
//creando la clase derivada o extendida
require 'Clase2.php';
class HijoP extends Padre{
    private $nombre;
    private $edad;
    //utilizando el encapsulamiento
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
    //método para imprimir
    public function imprimirDatos(){
        echo '++++++ Datos de la clase derivada ++++++';
        echo '<br> Apellido: ',$this->getApellido();
        echo '<br> Nombre: ',$this->getNombre();
        echo '<br> Edad: ',$this->getEdad();
        echo '<br> Monto heredado S/. : ',$this->getMonto();
    }
}
?>