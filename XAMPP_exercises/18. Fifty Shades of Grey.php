<!DOCTYPE>
<html>
<head>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;


        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i < 5; $i++) {
        $grey = 51 * $i;
        for ($j = 0; $j <= 9; $j++) {
            $multiply = 5 * $j;
            $final= $grey + $multiply;
            $color = "rgb($final, $final, $final);";
            echo "<div style=\"background-color: $color\"></div>";
        }
        echo "<br>";
    }

    ?>
</body>
</html>
