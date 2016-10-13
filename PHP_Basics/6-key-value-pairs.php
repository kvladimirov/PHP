<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Key-Value Pairs</title>
</head>
<body>
   <form>
    Delimiter: <input type="text" name="delimiter">
    Input: <textarea name="key-value-pairs"></textarea>
    Target Key: <input type="text" name="target-key">
    <input type="submit">
   </form>
   <?php
   if (isset($_GET['delimiter']) && isset($_GET['key-value-pairs']) && isset($_GET['target-key'])) {
       $delimiter = $_GET['delimiter'];
       $keyValuePairs = $_GET['key-value-pairs'];
       $targetKey = $_GET['target-key'];
       $keyValuePairs = explode("\n", $keyValuePairs);
       $keyValuePairs = array_filter(array_map('trim', $keyValuePairs));
       $result = '';
       for ($i = 0; $i < count($keyValuePairs); $i++) {
           $pair = explode($delimiter, $keyValuePairs[$i]);
           $key = $pair[0];
           $value = $pair[1];
           if ($key == $targetKey) {
               $result = $value;
           }
       }
       if($result == null){
           echo "None";
       }
       else{
           echo $result;
       }
   }
   ?>
</body>
</html>