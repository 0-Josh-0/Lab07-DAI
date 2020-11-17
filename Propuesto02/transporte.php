<?php 

class transportes{
    public $destinatario;
    public $destino;
    public $tarifa=150;
    public $tm;
  

public function __construct($destinatario,$destino,$tm){
    $this->destinatario = $destinatario;
    $this->destino = $destino;
    $this->tm = $tm;
}
 
public function flete(){

    return $this->tm * $this->tarifa;
}

public function imprimir(){

echo '<br>';
echo '<div class="card container abs-center" style="width: 50rem;">';
echo '<div class="card-body">';
echo '   <h5 class="card-title">Resultados del Registro</h5>';
echo '   <h6 class="card-subtitle mb-2 text-muted">Nombre del Destinatario:', $this->destinatario,'</h6>';
echo '    <p class="card-text">Destino:',$this->destino,'</p>';
echo '    <p class="card-text">Cantidad de TM:',$this->tm,'</p>';
echo '    <p class="card-text">Tarifa: S/.',$this->tarifa,'</p>';
echo '    <p class="card-text">El costo del flete es: S/.',$this->flete(),'</p>';
echo '    <a href="../Propuesto02/formulario.php" class="card-link">Regresar Atras</a>';
echo '  </div>';
echo '</div>';
}
}
class IVOVIC extends transportes{



}

class LEONIDAS extends transportes{

    public $monto;
    public $seguro;

    public function monto()
    {
        return $this->flete() + $this->seguro();
    }

    public function seguro()
    {
        return 0.005 * $this->flete();
    }
    public function tarifario(){

        if($this->destino == 'Arequipa' or $this->destino=="Ilo" or $this->destino=="Tacna" ) {
            $this->tarifa=200;
        } else {
        
            if($this->destino == 'Piura' or $this->destino=="Tumbes" or $this->destino=="Cajamarca" ) {
                $this->tarifa = 220;
            } else{
                $this->tarifa = 150;
            }}
    
    }

}
?>