<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dates</title>
</head>
<body>
<form>
    Start Date:
    <br>
    <input type="text" name="date">

    <br>
    Output Format:
    <br>
    <input type="text" name="format">
    <br>
    Commands:
    <br>
    <textarea name="commands"></textarea>
    <br>
    <input type="submit">
</form>
<?php
if (isset($_GET['date']) && isset($_GET['format']) && isset($_GET['commands'])) {
    date_default_timezone_set('Europe/Sofia');
    $format = $_GET['format'];
    $dateStr = $_GET['date'];
    $date = DateTime::createFromFormat('d/m/Y', $dateStr);
    $commands = $_GET['commands'];
    $commands = explode(" ", $commands);
    $action = $commands[0];
    $days = intval($commands[1]);
    if ($action === 'add') {
        date_add($date, date_interval_create_from_date_string("$days days"));
        echo date_format($date, "$format");
    } else {
        date_sub($date, date_interval_create_from_date_string("$days days"));
        echo date_format($date, "$format");
    }
}
?>
</body>
</html>