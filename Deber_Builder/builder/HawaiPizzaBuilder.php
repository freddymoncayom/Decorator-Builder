<?php 
class HawaiPizzaBuilder extends PizzaBuilder {

    public function buildMasa(){ $this->pizza->setMasa("suave"); }
    public function buildSalsa(){ $this->pizza->setSalsa("dulce"); }
    public function buildRelleno(){ $this->pizza->setRelleno("chorizo+alcachofas"); }
    }
?>