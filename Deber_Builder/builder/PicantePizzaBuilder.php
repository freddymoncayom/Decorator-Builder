<?php 
class PicantePizzaBuilder extends PizzaBuilder {

public function buildMasa(){ $this->pizza->setMasa("cocida"); } 
public function buildSalsa(){ $this->pizza->setSalsa("picante"); } 
public function buildRelleno(){ 
$this->pizza->setRelleno("pimienta+salchichón"); 
}
}

?>
