<?php 
include('Cocina.php');
include('PicantePizzaBuilder.php');
include('HawaiPizzaBuilder.php');

$cocina = new Cocina();//Crear el objeto cocina para poder generar la pizza
$hawai_pizzabuilder = new HawaiPizzaBuilder();//Creas objeto de tipo pizza hawai
$picante_pizzabuilder = new PicantePizzaBuilder();

$cocina->setPizzaBuilder($hawai_pizzabuilder );
$cocina->construirPizza();
$pizza = $cocina->getPizza(); 
$pizza->mostrarComponentes();

$cocina->setPizzaBuilder($picante_pizzabuilder );
$cocina->construirPizza();
$pizza = $cocina->getPizza();
$pizza->mostrarComponentes();

?>
