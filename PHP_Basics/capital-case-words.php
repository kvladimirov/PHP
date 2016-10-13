<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extract Capital-Case Words</title>
</head>
<body>
<?php
if (isset($_GET['text'])) {
$text = $_GET['text'];
preg_match_all('/\w+/', $text, $words);
$words = $words[0];
$upperWords = array_filter($words, function($word){
return strtoupper($word) == $word;
});
echo implode(', ', $upperWords);
}
?>
<form>
      <textarea rows="5"cols="50" name="text"></textarea> <br>
    <input type="submit" value="Extract Capital-Case">
</form>
</body>
</html>