<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="123";
  echo str_pad($a,8,'0',STR_PAD_LEFT); // '00000123' 
  echo "<br>";
  
  $a="12345";
  echo str_pad($a,8,'0',STR_PAD_LEFT); // '00012345' 
  echo "<br>";

  $a="12345789";
  echo str_pad($a,8,'0',STR_PAD_LEFT); // '12345789'
?>
</body>
</html>