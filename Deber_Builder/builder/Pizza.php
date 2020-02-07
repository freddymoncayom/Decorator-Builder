<?php 
class Pizza {
var $masa = null;
var $salsa = null;
var $relleno = null;

public function setMasa($masa){ $this->masa = $masa; }
public function setSalsa($salsa){ $this->salsa = $salsa; }
public function setRelleno($relleno){ $this->relleno = $relleno; }

public function mostrarComponentes(){
echo $this->masa." - ".$this->salsa." - ".$this->relleno."
";
}
}
?>