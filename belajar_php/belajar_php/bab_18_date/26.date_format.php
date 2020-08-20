<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = date_create("17-08-2016");
  echo date_format($tanggal, "d M Y");           // 17 Aug 2016
  echo "<br>";
  
  $tanggal = date_create("21-4-2016 10:30:59");
  echo date_format($tanggal, "d M Y, H:i:s");    // 21 Apr 2016, 10:30:59 
  echo "<br>";
  
  $tanggal = date_create("next week");
  echo date_format($tanggal, "d M Y");           // 08 Feb 2016
?>
</body>
</html>