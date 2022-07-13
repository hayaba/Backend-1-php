<!--        Exercise 2
 Create two new classes that inherits from the Fruit class
     Give the new child classes some meaningful names
 Add the following to the two new child classes:
     At least one property, that is unique for that class
     At least one method, that is unique for that class
 Create a new instance of both of the child classes
BONUS:
 Add additional properties and methods to the child classes -->

<!--        Exercise 3
 In your child classes, override the parent’s constructor
     Print out the name, color and some additional text
BONUS:
 Create a new child class, that inherits from another child (3rd level inherit)
 Add some additional properties to it
 Restrict one of the methods from being overridden -->

<!--        Exercise 4
 Add a static property to your Fruit class
     Must be used to count how many Fruit classes that you have made
 Modify your constructor, so it adds to the counter
 Create a static method to get the ”count” property
 Create some new Fruit instances and print the count on screen
     Try also to create some instances of a child object to Fruit – does the count increase?
BONUS:
 Add functionality to your Fruit class, so it subtracts from static count,
when the instance of Fruit is destroyed or set to NULL -->

<?php
class Fruit
{
    public $name;
    public $color;
    function __construct($newName, $newColor)
    {
        $this->name = $newName;
        $this->color = $newColor;

        echo $this->name
            . " is "
            . $this->color;
    }
}

//___________ Exercise 2 || Inheritance ____________
class Berrys extends Fruit
{
    public $type;

    function set($type)
    {
        $this->type = $type;
    }
    function get()
    {
        return $this->type;
    }
}
$strawberry = new Berrys("Strawberry", "red");
$strawberry->set("berrys");
echo ", and it is type of "
    . $strawberry->get()
    . "<br>";

//__________ Exercise 3 || Overriding Inherited Methods ___________
class Citrus extends Fruit
{
    public $weight;

    function __construct($newName, $newColor, $newWeight)
    {
        $this->name = $newName;
        $this->color = $newColor;
        $this->weight = $newWeight;

        echo $this->name
            . " is "
            . $this->color
            . ", and we need "
            . $this->weight
            . " kg.<br>";
    }
}

$orange = new Citrus("Orange", "orange", 2);
$lime = new Citrus("Lime", "green", 1.5);
