<?php 
class Cocina {

var $pizzaBuilder;

public function setPizzaBuilder($pb){ $this->pizzaBuilder = $pb; }
public function getPizza(){ return $this->pizzaBuilder->getPizza(); }

public function construirPizza() { 
$this->pizzaBuilder->crearNuevaPizza();
$this->pizzaBuilder->buildMasa();
$this->pizzaBuilder->buildSalsa();
$this->pizzaBuilder->buildRelleno();
}
}?>
