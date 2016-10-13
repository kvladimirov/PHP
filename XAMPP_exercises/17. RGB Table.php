<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        table * {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>

    <?php
    for ($row = 1; $row <= 5; $row++){

        $red = 0;
        $green = 0;
        $blue = 0;

        echo "<tr>";
        for ($col = 1; $col<=3; $col++){
            if ($col == 1) {
                $red = 51 * $row;
                $green = 0;
                $blue = 0;
            }
            else if ($col == 2) {
                $red = 0;
                $green = 51 * $row;
                $blue = 0;
            }
            else {
                $red = 0;
                $green = 0;
                $blue = 51 * $row;
            }

            $color = "rgb($red, $green, $blue)";
            echo "<td style='background-color: $color'></td>";
        }
        echo "</tr>";

    }
    ?>

</table>
</body>
</html>