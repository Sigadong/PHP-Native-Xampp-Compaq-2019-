<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = strtotime("10 September 2020");
  echo $tanggal;   // 1599670800
  echo "<br>";
  echo date("d F Y", $tanggal); // 10 September 2020
?>
</body>
</html>