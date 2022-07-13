<!-- 
            Exercise 3
 Declare a class that can store information about a person/user
     Declare 3 properties (e.g. Name, Age etc.)
 Create 3 instances of that class, and assign different values to the properties
 Create a method in the class that prints out all the properties
     Add some flavor text to make it look ”pretty”
BONUS:
 Create an array that includes all the instances of the class
 Loop through the array, and print all properties of all instances 
-->

<?php
//_______ Method 1: Outside the class (by directly changing the property value)
class User {
    public $name;
    public $age;
    public $country;
}

$arrayOfUsers = [
    new User(),
    new User()
];

$arrayOfUsers[0]->name = "Jack";
$arrayOfUsers[0]->age = 31;
$arrayOfUsers[0]->country = "Brazil";

$arrayOfUsers[1]->name = "Oliver";
$arrayOfUsers[1]->age = 23;
$arrayOfUsers[1]->country = "Poland";

for($i = 0; $i < count($arrayOfUsers); $i++) {
    echo $arrayOfUsers[$i]->name
            . " is "
            . $arrayOfUsers[$i]->age
            . ", and he is from "
            . $arrayOfUsers[$i]->country
            . "<br><br>";
}

//__________ This is how the code woould look like without the loop __________
// echo $arrayOfUsers[0]->name
//         . " is "
//         . $arrayOfUsers[0]->age
//         . ", and he is from "
//         . $arrayOfUsers[0]->country
//         . "<br>"
//         . $arrayOfUsers[1]->name
//         . " is "
//         . $arrayOfUsers[1]->age
//         . ", and he is from "
//         . $arrayOfUsers[1]->country
//         . "<br><br>";

//_________ method 2: Inside the class (by adding a set_name() method and use $this)
//_________ A loop can also be used for cleaner code (left without a loop to demonstrate the method)
class Person {
    public $nickName;
    public $hobby;

    function set_name($nickName) {
        $this->nickName = $nickName;
    }
    function set_hobby($hobby) {
        $this->hobby = $hobby;
    }
    function get_name() {
        return $this->nickName;
    }
    function get_hobby() {
        return $this->hobby;
    }
}

$jason = new Person();
$jason->set_name("Shadow");
$jason->set_hobby("boxing");

$peter = new Person("something");


echo $jason->get_name()
        . " likes "
        . $jason->get_hobby();
