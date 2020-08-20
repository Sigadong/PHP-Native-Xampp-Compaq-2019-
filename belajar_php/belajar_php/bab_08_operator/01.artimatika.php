<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hasil1 = +11;
  $hasil2 = -3;
  $hasil3 = 3+5;
  $hasil4 = 8-4.5;
  $hasil5 = 2*5;
  $hasil6 = 3+8/5-3;
  $hasil7 = 10 % 4;
  $hasil8 = 2**4;
  
  var_dump($hasil1); // int(11) 
  echo "<br>";    
  var_dump($hasil2); // int(-3) 
  echo "<br>";                   
  var_dump($hasil3); // int(8) 
  echo "<br>";
  var_dump($hasil4); // float(3.5) 
  echo "<br>";
  var_dump($hasil5); // int(10) 
  echo "<br>";
  var_dump($hasil6); // float(1.6) 
  echo "<br>";
  var_dump($hasil7); // int(2) 
  echo "<br>";
  var_dump($hasil8); // int(16) 
?>
</body>
</html>