<?php
include 'Clase1.php';
//creando un objeto, instanciando
$auto = new Automovil();
$auto->placa='AQ123';
$auto->marca='Suzuki';
$auto->color='Amarillo';
$auto->precio=20000;
//accediendo a los métodos
$auto->acelerar();
$auto->girarDerecha();
//imprimiendo algunas propiedades
echo '<br> Placa: ',$auto->placa;
echo '<br> Precio: S/. ',$auto->calcularPrecio();
?>