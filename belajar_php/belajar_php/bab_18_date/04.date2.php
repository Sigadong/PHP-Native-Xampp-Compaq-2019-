<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $minggu_depan = time() + (7 * 24 * 60 * 60);
  echo date("d m Y", $minggu_depan);       // 06 02 2016
  echo "<br>";
  
  $kemaren = time() - (1 * 24 * 60 * 60);
  echo date("d m Y", $kemaren );           // 29 01 2016 
?>
</body>
</html>