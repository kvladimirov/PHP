<form>
    <div>First Number</div>
    <input type="number" name="num1">
    <div>Second Number</div>
    <input type="number" name="num2">

    <input type="submit" value="Submit">
</form>

<ul>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);

        for ($i = 1; $i <= $num1; $i++){
            echo "\t<li>List $i\n";
            echo "\t<ul>\n";
            for ($j = 1; $j <= $num2; $j++){
                echo "\t\t<li>\n"."\tElement $i.$j\n"."</li>\n";
            }
            echo "</ul>";
            echo "</li>";
        }
    }
    ?>
</ul>
