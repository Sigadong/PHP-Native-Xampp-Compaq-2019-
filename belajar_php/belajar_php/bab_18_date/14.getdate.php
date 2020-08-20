<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  date_default_timezone_set("Asia/Jakarta");
  $saat_ini = getdate();
  
  echo "<pre>";
  print_r($saat_ini);
  echo "</pre>";
?>
</body>
</html>