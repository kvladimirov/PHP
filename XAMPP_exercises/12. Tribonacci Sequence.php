<form>
    <div>Number</div>
    <input type="number" name="num">
    <input type="submit" value="Submit"></form>

<?php
if (isset($_GET['num'])){
    $num = intval($_GET['num']);
    $f1 = 1;
    $f2 = 1;
    $f3 = 2;

    echo "$f1\n$f2\n$f3 ";

    $fNext = 0;
    if ($num == 0)
        echo "1 ";
    else{
        // echo "$f2 ";
        for ($i = 1; $i <= $num ; $i++)
        {
            $fNext = $f1 + $f2 + $f3;
            echo "$fNext ";
            $f1 = $f2;
            $f2 = $f3;
            $f3 = $fNext;
        }
    }
}


?>