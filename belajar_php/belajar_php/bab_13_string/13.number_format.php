<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo number_format(39999.99,0,',','.'); // 40.000
  echo "<br>";
  echo number_format(39999.99,2,',','.'); // 39.999,99
  echo "<br>";
  echo number_format(39999.99,4,',','.'); // 39.999,9900
  echo "<br>";
  echo number_format(1499999,2,',','.'); // 1.499.999,00
  
  echo "<br>";
  echo number_format(135000,2,' ',' '); // 135 000 00
  echo "<br>";
?>
</body>
</html>