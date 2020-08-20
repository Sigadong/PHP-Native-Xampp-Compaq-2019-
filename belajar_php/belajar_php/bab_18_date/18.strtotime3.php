<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = strtotime("besok");
  var_dump($tanggal); // bool(false) 
  echo date("d F Y", $tanggal);  // 01 January 1970 
?>
</body>
</html>