<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num'])) {
    $n = intval($_GET['num']);

    $fact = 1;

    for ($j = 1; $j <= $n; $j++){

        $fact = $fact * $j;

        // echo "$fact";

    }
    echo "$fact";
}
?>
</body>
</html>