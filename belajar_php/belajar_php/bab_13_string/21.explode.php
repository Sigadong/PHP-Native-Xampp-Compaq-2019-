<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $sumber="HTML,CSS,PHP,MySQL,JavaScript";
 
  $array_hasil=explode(",",$sumber); 
  print_r($array_hasil); 
  
  //Array ([0] => HTML [1] => CSS [2] => PHP [3] => MySQL [4] => JavaScript)
?>
</body>
</html>