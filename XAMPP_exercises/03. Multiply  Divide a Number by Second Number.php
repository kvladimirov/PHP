<!DOCTYPE>
<html>
<head>

</head>
<body>

<form>
    <div></div>
    <input type="text" name="num1"/>
    <div></div>
    <input type="number" name="num2"/>

    <div><input type="submit" value="Submit"/></div>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])){
    $n1=intval($_GET['num1']);
    $n2=intval($_GET['num2']);

    if ($n1 <= $n2) {
        $multiply = ($_GET['num1'] * $_GET['num2']);
        echo $multiply;
    }
    else if ($n1 > $n2) {
        $multiply = ($_GET['num1'] / $_GET['num2']);
        echo $multiply;
    }
}
?>

</body>
</html>
