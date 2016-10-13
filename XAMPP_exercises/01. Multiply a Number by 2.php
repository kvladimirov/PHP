<!DOCTYPE>
<html>
<head>

</head>
<body>

<form>

    <input type="text" name="num"/>

    <input type="submit" value="SUBMIT"/>
</form>
<?php
if (isset($_GET['num'])){
    $multiply = ($_GET['num']*2);
    echo $multiply;
}
?>

</body>
</html>
