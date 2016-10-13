<!DOCTYPE>
<html>
<head>
    <style>
        div{
            display: inline-block;
            width: 120px;
            height: 120px;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<ul>
    <?php

    for ($grey = 0; $grey <= 255; $grey += 51) {
        for ($grey1 = 0; $grey1 <= 45; $grey1 += 5) {

                $color = "rgb($grey, $grey1, 0)";
                echo "<div style='background: $color'>$color</div>";
            }
    }

    ?>
</ul>
</body>
</html>
