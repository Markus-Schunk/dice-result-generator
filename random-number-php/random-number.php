<?php 

$dice_type = $_POST["dice-type"];
$iterations = $_POST["iterations"];
$result = "";


for ($i = 0; $i < $iterations; $i++) {
    switch ($dice_type) {
        case "d4":
           $result = rand(1, 4);
            echo $result;
            echo "<br>";
            break;
        case "d6":
            $result = rand(1, 6);
            echo $result;
            echo "<br>";
            break;
        case "d8":
            $result = rand(1, 8);
            echo $result;
            echo "<br>";
            break;
        case "d10":
            $result = rand(1, 10);
            echo $result;
            echo "<br>";
            break;
        case "d12":
            $result = rand(1, 12);
            echo $result;
            echo "<br>";
           break;
    }
      
} 

?>