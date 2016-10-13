<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sums by Town</title>
</head>
<body>
<?php
if (isset($_GET['towns-incomes']))
{
    $townsIncomes = array_filter(array_map('trim',
        explode("\n", $_GET['towns-incomes'])));
    $sumsByTown = calcSumsByTown($townsIncomes);
    foreach ($sumsByTown as $town => $sum)
        echo "$town -> $sum <br>";
}
function calcSumsByTown(array $townsIncomes) : array
{
    $sums = [];
    foreach ($townsIncomes as $townIncome)
    {
        $tokens = explode(':', $townIncome);
        $town = $tokens[0]; $income = floatval($tokens[1]);
        if (isset($sums[$town]))
            $sums[$town] += $income;
        else
            $sums[$town] = $income;
    }
    ksort($sums);
    return $sums;
}
?>
<form>
    <textarea rows="10" name="towns-incomes"></textarea><br>
    <input type="submit" value="Calculate">
</form>

</body>
</html>