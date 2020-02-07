<?php 
abstract class PizzaBuilder { 

    var $pizza = null;
    
    public function getPizza() { return $this->pizza; }
    public function crearNuevaPizza() { $this->pizza = new Pizza(); }
    public abstract function buildMasa();
    public abstract function buildSalsa();
    public abstract function buildRelleno(); 
    }
?>