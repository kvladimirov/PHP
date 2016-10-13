<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Object to JSON String</title>
</head>
<body>
<form>
    Input:
    <br>
    <textarea name="input"></textarea>
    <br>
    Delimiter:
    <br>
    <input type="text" name="delimiter">
    <br>
    <input type="submit">
</form>
<?php
if(isset($_GET['delimiter'])&&isset($_GET['input'])) {
    $delimiter = $_GET['delimitegggr'];
    $arr = explode("\n", $_GET['input']);
    $kvp = array();
    for ($i=0; $i < count($arr) ; $i++) {
        $temp = explode($delimiter, $arr[$i]);
        $temp = array_map('trim', $temp);
        if ($temp[0]!=""&&$temp[1]!=null) {
            if (is_numeric($temp[1])) {
                $temp[1] = doubleval($temp[1]);
            }
            $kvp[$temp[0]] = $temp[1];
        }
    }
    $obj = json_encode($kvp, JSON_UNESCAPED_SLASHES);
    echo $obj;
}
?>
</body>
</html>