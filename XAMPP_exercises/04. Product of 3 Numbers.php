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
    <div></div>
    <input type="number" name="num3"/>
    <div><input type="submit" value="Submit"/></div>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $n1=intval($_GET['num1']);
    $n2=intval($_GET['num2']);
    $n3=intval($_GET['num3']);
    if (($_GET['num1'] * $_GET['num2'] * $_GET['num3'])>=0) {
        $multiply = ($_GET['num1'] * $_GET['num2']);
        echo "Positive";
    }
    else  {
        echo "Negative";
    }
}
?>
</body>
</html>
