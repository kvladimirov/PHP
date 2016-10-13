<!DOCTYPE>
<html>
<head>
</head>
<body>
<form>
    <div></div>
    <input type="text" name="num"/>

    <div><input type="submit" value="Submit"/></div>
</form>
<ul>
    <?php
    if (isset($_GET['num'])) {
        $n1 = intval($_GET['num']);
        function isPrime($num)
        {
            $sqrt = sqrt($num);
            for ($j = 2; $j <= $sqrt; $j++) {

                if ($num % $j == 0) {
                    return false;
                }
            }
            return true;
        }
        for ($i = $n1; $i > 2; $i--) {
            if (isPrime($i)) {
                echo $i . " ";
            }
        }
    }
    ?>
</ul>
</body>
</html>
