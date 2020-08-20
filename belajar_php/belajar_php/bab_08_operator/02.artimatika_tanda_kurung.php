<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hasil1=3+8/5-3*9+9;
  var_dump($hasil1);      // float(-13.4) 
  echo "<br>";      
               
  $hasil2=((3+8)/(5-3))*(9+9);
  var_dump($hasil2);      // float(99) 	 
?>
</body>
</html>