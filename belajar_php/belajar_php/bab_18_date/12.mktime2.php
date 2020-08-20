<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = mktime(10, 30, 50, 2, 15, 2016);  
  echo date("d M Y, H:i:s", $tanggal );   // 15 Feb 2016, 10:30:50
?> 
</body>
</html>