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

    for ($j = $n; $j >=1; $j--){

        echo "$j ";
    }
}
?>
</body>
</html>