<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  date_default_timezone_set("Asia/Jakarta");
  echo "Waktu WIB: ".date("d - m - Y, H:i:s");
  // Waktu WIB: 31 - 01 - 2016, 13:04:48
  echo "<br>";
  
  date_default_timezone_set("Asia/Makassar");
  echo "Waktu WITA: ".date("d - m - Y, H:i:s");
  // Waktu WITA: 31 - 01 - 2016, 14:04:48
  echo "<br>";
  
  date_default_timezone_set("Asia/Jayapura");
  echo "Waktu WIT: ".date("d - m - Y, H:i:s");
  // Waktu WIT: 31 - 01 - 2016, 15:04:48
?>
</body>
</html>