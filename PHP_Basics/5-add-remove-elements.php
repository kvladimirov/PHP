<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add/Remove Elements</title>
</head>
<?php
if (isset($_GET['delimiter']) && isset($_GET['commands'])) {
    $delimiter = $_GET['delimiter'];
    $comand = $_GET['commands'];
    $comand = explode("\n", $comand);
    $comand = array_filter(array_map('trim', $comand));
    $resultArr = [];
    for ($i = 0; $i < count($comand); $i++) {
        $pair = explode($delimiter, $comand[$i]);
        $action = $pair[0];
        $value = $pair[1];
        if ($action === 'add') {
            array_push($resultArr, $value);
        } else {
            array_splice($resultArr, $value, 1);
        }
    }
    for ($i = 0; $i < count($resultArr); $i++) {
        echo $resultArr[$i] . "<br>";
    }
}
?>
<body>
    <form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="commands"></textarea>
    <input type="submit">
    </form>
</body>
</html>