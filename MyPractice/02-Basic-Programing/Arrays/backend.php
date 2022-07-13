<?php
$jsonFile = file_get_contents("myJSON.json");
$jsonArray = json_decode($jsonFile, true);
// ---------- true ==> returns Arrays
// ---------- false ==> returns Objects

$myArray = [
    "Proleo",
    26,
    "Female"
];
echo "<tr style='color:blue;'> 
    <td>" . $myArray[0] . "</td>
    <td>" . $myArray[1] . "</td>
    <td>" . $myArray[2] . "</td>
</tr>";

echo "<tr style='color:red;'> 
    <td>" . $jsonArray[0]["firstName"] . "</td>
    <td>" . $jsonArray[1]["age"] . "</td>
    <td>" . $jsonArray[2]["gender"] . "</td>
</tr>";

// ____________________ Exercise 4 __________________
for($i = 0; $i <= 100; $i++){
    echo $i . " , ";
}

foreach($myArray as $value) {
    echo
        "<td style='color:orange;'>" . $value . "</td>";
}

$length = sizeof($myArray);
while($myArray < $length) {
    echo "you stupid";
}

$size = sizeof($jsonArray);
$counter = 0;

while ($counter < $size) {
    echo "<tr style='color:green;'> 
    <td>" . $jsonArray[$counter]["firstName"] . "</td>
    <td>" . $jsonArray[$counter]["age"] . "</td>
    <td>" . $jsonArray[$counter]["gender"] . "</td>
</tr>";
    $counter ++;
}


?>