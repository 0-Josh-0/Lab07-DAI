<?php
//Creamos la clase
class Padre{
//Propiedad
    protected $apellido;
    protected $monto;
//encapsulamiento
    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setMonto($monto)
    {
        $this->monto=$monto;
    }
    public function getMonto()
    {
        return $this->monto;
    }
}

?>