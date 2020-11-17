<?php 

class registrar{
    public $nombre;
    public $categoria;
    public $basico;
    public $bonificacion;
    public $tipo;
    public $remuneracion;
    public $descuento;

public function __construct($nombre,$categoria,$basico,$bonificacion,$tipo){
    $this->nombre = $nombre;
    $this->categoria = $categoria;
    $this->basico = $basico;
    $this->bonificacion = $bonificacion;
    $this->tipo = $tipo;
}
 
public function calcular_neto(){
    $this->remuneracion = $this->basico + $this->bonificacion;
    
    if($this->tipo == 'AFP'){
        $this->descuento = 0.11 * $this->remuneracion;
    }
    else{
        $this->descuento = 0.13 * $this->remuneracion;
    }
    return $this->remuneracion - $this->descuento;

}
public function imprimir(){
echo '<br>';
echo '<div class="card container abs-center" style="width: 50rem;">';
echo '<div class="card-body">';
echo '   <h5 class="card-title">Resultados del Registro</h5>';
echo '   <h6 class="card-subtitle mb-2 text-muted">Nombre del Empleado:', $this->nombre,'</h6>';
echo '    <p class="card-text">Categoria:',$this->categoria,'</p>';
echo '    <p class="card-text">Básico: S/.',$this->basico,'</p>';
echo '    <p class="card-text">Bonificación:',$this->bonificacion,'</p>';
echo '    <p class="card-text">Tipo de Aportacion:',$this->tipo,'</p>';
echo '    <p class="card-text">',$this->calcular_neto(),'</p>';
echo '    <p class="card-text">Remuneración:',$this->remuneracion,'</p>';
echo '    <p class="card-text">Descuento: S/.',$this->descuento,'</p>';
echo '    <p class="card-text">El Neto es: S/.',$this->calcular_neto(),'</p>';
echo '    <a href="../Propuesto01/formulario.php" class="card-link">Regresar Atras</a>';
echo '  </div>';
echo '</div>';

}
}
?>