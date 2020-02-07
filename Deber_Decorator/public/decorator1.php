<?php
/**
 * Creo una clase abstracta con las funcionalidades
 * comunes que tendrán los decoradores, para evitar
 * la duplicación de codigo
 */
abstract class StoneDecorator
{
    protected $damage;
    protected $damagePoints;

    public function __construct($damage)
    {
        $this->damage = $damage;
    }

    public function getDamage()
    {
        return $this->damage->getDamage() + $this->damagePoints;
    }

    public function __call($method, $args)
    {
        return call_user_func_array(array($this->damage, $method), $args);
    }
}

// Coger una piedra de fuego aumenta +2 el daño
class StoneOfFire extends StoneDecorator { protected $damagePoints = 2; }

// Coger una piedra de viento aumenta +7 el daño
class StoneOfWind extends StoneDecorator { protected $damagePoints = 7; }

// Ahora si los ejemplos
$damage = new StoneOfFire(new Damage('Rocky'));
echo 'Un golpe de ' . $damage->getName() . ' es de ' . $damage->getDamage() . ' puntos' . PHP_EOL;

$damage = new StoneOfWind(new Damage('Rocky'));
echo 'Un golpe de ' . $damage->getName() . ' es de ' . $damage->getDamage() . ' puntos' . PHP_EOL;

$damage = new StoneOfFire(new StoneOfWind(new Damage('Rocky')));
echo 'Un golpe de ' . $damage->getName() . ' es de ' . $damage->getDamage() . ' puntos' . PHP_EOL;

?>

$damage = new Damage('Rocky');//Creación del objeto con el nombre de rocky 
echo 'Un golpe de ' . $damage->getName() . //Impresión por consola del golpe que recibe y los puntos que fueron reducidos
' es de ' . $damage->getDamage() . ' puntos' . PHP_EOL;
?>