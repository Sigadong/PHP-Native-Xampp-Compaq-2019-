<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hasil = "180" + 20;
  var_dump($hasil); // int(200) 
  echo "<br>";
  
  $hasil = "9 anak" + 3;
  var_dump($hasil); // int(12) 
  echo "<br>";
  
  $hasil = "5 ekor sapi" + "3 ekor kambing";
  var_dump($hasil); // int(8) 
  echo "<br>";
  
  $hasil = "17.5cm" + "1.99cm";
  var_dump($hasil); // float(19.49)
  echo "<br>";
  
  $hasil = true + true + true;
  var_dump($hasil); // int(3) 
?>
</body>
</html>