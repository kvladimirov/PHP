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
        for ($i = $n1 - 1; $i > 0; $i--) {
            if ($n1 % $i != 0){
                echo "$i ";}

        }
    } ?>
</ul>
</body>
</html>
