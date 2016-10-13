<form>
    <div>Enter Number:</div>
    <input type="number" name="num">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['num'])){
    $num = intval($_GET['num']);
    for ($i = 1; $i <= $num; $i++){
        echo "\t<button>$i</button>\n";
    }
}
?>