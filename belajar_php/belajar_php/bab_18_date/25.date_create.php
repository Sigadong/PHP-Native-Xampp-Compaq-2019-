<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = date_create("17-08-2016");
  echo $tanggal;
  // Catchable fatal error: Object of class DateTime could 
  // not be converted to string
?>
</body>
</html>