<?php
class Persona{
//atributos y metodos
    public $nombre = "Pedro";
    public $apellido;
    public $edad;
//crear un metodo
    public function hablar($mensaje){
        echo $mensaje;
    }
}
//instanciamos la clase
$Persona = new Persona();
//echo $Persona->nombre;
$Persona->hablar('Saludos desde Tecsup');

?>

