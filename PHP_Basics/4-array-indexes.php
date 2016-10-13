<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Indexes</title>
</head>
<body>
    <form>
    Delimiter: <input type="text" name="delimiter">
    Array-size: <input type="text" name="array-size">
    Input: <textarea name="key-value-pairs"></textarea>
    <input type="submit">
    </form>
    <?php
    if(isset($_GET['key-value-pairs']) && isset($_GET['delimiter']) && isset($_GET['array-size'])) {
        $keysValues = array_filter(array_map('trim',
            explode("\n", $_GET['key-value-pairs'])));
        $delimiter = $_GET['delimiter'];
        $arraySize = intval($_GET['array-size']);
        $indexesSums = [];
        for ($i = 0; $i < $arraySize; $i++){
            $indexesSums[$i] = 0;
        }
        for ($i = 0; $i < count($keysValues); $i++)
        {
            $tokens = explode($delimiter, $keysValues[$i]);
            $key = $tokens[0]; $value = intval($tokens[1]);
            $indexesSums[$key] = $value;
        }
        for ($i = 0; $i < count($indexesSums); $i++){
            echo $indexesSums[$i] . '<br>';
        }
    }
    ?>
</body>
</html>