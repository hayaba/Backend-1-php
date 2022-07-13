<?php
class Fruit
{
    // Propreties
    public $name;
    public $color;

    // Methods
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
}

$array = [
    new Fruit(),
    new Fruit(),
    new Fruit()
];

$array[0]->setName("Apple");
$array[0]->setColor("red");
$array[1]->setName("Orange");
$array[1]->setColor("orange");
$array[2]->setName("Banana");
$array[2]->setColor("yellow");

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i]->getName()
        . " is "
        . $array[$i]->getColor()
        . "<br>";
}

// echo $array[0]->getName() . " is " . $array[0]->getColor()
//     . "<br>" 
//     . $array[1]->getName() . " is " . $array[1]->getColor()
//     . "<br>"
//     . $array[2]->getName() . " is " . $array[2]->getColor();
