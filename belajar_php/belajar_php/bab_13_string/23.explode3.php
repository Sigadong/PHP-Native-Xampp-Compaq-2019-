<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $sumber="HTML,CSS,PHP,MySQL,JavaScript";
 
  $array_hasil=explode(",",$sumber,3); 
  print_r($array_hasil); 
  
  // Array ( 
  // [0] => HTML 
  // [1] => CSS 
  // [2] => PHP,MySQL,JavaScript ) 
?>
</body>
</html>