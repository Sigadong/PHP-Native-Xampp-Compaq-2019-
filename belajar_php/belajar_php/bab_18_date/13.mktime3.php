<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo date("d M Y, H:i:s", mktime(10, 01, 01, 8, 17, 2016));
  //  17 Aug 2016, 10:01:01
  echo "<br>";
  
  echo date("d M Y, H:i:s", mktime(16, 30, 00, 8, 8, 1945));
  //  08 Aug 1945, 16:30:00
  echo "<br>";
  
  echo date("l, jS F y, H:i:s", mktime(03, 30, 00, 20, 11, 1990));
  //  Sunday, 11th August 91, 03:30:00
?>
</body>
</html>