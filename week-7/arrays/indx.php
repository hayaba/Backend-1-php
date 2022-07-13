<?php
$jsonFile = file_get_contents("myJSON.JSON");
$jsonArray = json_decode($jsonFile, true);
$tableArray = [
    "Iva",
    24,
    "female",
    "working out",
    "Bulgarian"
];
// var_dump($jsonArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?php
            for ($i = 0; $i < 100; $i++) {
                echo $i;
            }
            ?> -->

    <table>
        <tr class="header">
            <td>
                NAME
            </td>
            <td>
                AGE
            </td>
            <td>
                GENDER
            </td>
        </tr>

        <?php

        $size = sizeof($jsonArray);
        $counter = 0;

        while ($counter < $size) {
            echo "
        <tr>
            <td>
                " . $jsonArray[$counter]['firstName'] . "
            </td>
            <td>
                " . $jsonArray[$counter]['age'] . "
            </td>
            <td>
                " . $jsonArray[$counter]['gender'] . "
            </td>
       </tr>
    ";
            $counter += 1;
        }
        ?>


        <!-- <tr>
            <td>
                <?php
                echo $jsonArray[0]["firstName"];
                ?>
            </td>
            <td>
            <?php
            echo $jsonArray[0]["age"];
            ?>
            </td>
            <td>
            <?php
            echo $jsonArray[0]["gender"];
            ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $jsonArray[1]["firstName"];
                ?>
            </td>
            <td>
            <?php
            echo $jsonArray[1]["age"];
            ?>
            </td>
            <td>
            <?php
            echo $jsonArray[1]["gender"];
            ?>
            </td>
        </tr> -->
    </table>

    <style>
        table {
            border: solid 2px;
        }

        .header {
            color: red;
        }

        tr,
        td {
            border: solid 2px;
            padding: 10px;
        }
    </style>

</body>

</html>