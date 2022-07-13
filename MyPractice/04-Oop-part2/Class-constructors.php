<!-- 
            Exercise 1
 Create a new class called Fruit
 Add a name and color property to the class
 Create a CONSTRUCTOR that prints out the name and color of the fruit
 Create 3 instances of the Fruit class
     Assign different values to the name and color properties
BONUS:
 Add additional properties and methods to the Fruit class 
-->

<?php
class Fruit
{
    public $name;
    public $color;
    public $isFresh;

    function __construct($newName, $newColor, $isFresh = true)
    {
        $this->name = $newName;
        $this->color = $newColor;
        $this->fresh = $isFresh;
        if ($this->fresh == true) {
            echo $this->name
                . " is "
                . $this->color
                . ", and it is fresh <br><br>";
        } else {
            echo $this->name
                . " is "
                . $this->color
                . ", but it isn't fresh <br><br>";
        }
    }
}

$apple = new Fruit("Apple", "red", true);
$banana = new Fruit("Banana", "yellow", true);
$orange = new Fruit("Orange", "orange", false);
