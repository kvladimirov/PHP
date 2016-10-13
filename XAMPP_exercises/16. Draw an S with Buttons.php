<?php
$cols = 5;
$rows= 9;

$val1 = 1;
$val0 = 0;
$color = "blue";
for ($row = 0; $row < $rows; $row++){
    if ($row % 4 == 0){
        for ($col = 0; $col < $cols; $col++){
            echo "<button style='background-color: $color'>$val1</button>";
        }
        echo "<br>";
    }
    else if ($row < 4){
        echo "<button style='background-color: $color'>$val1</button>";
        for ($col = 1; $col < $cols; $col++){
            echo "<button>$val0</button>";
        }
        echo "<br>";
    }
    else{
        for ($col = 0; $col < $cols - 1; $col++){
            echo "<button>$val0</button>";
        }
        echo "<button style='background-color: $color'>$val1</button>";
        echo "<br>";
    }
}

?>