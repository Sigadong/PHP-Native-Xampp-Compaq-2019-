<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  // 17 Aug 2016
  echo date("d M Y", mktime(0, 0, 0, 8, 17, 2016)); 
  echo "<br>";
  echo date("d M Y", strtotime("17-8-2016"));      
  echo "<br>";
  
  // 21 Apr 2016, 10:30:59
  echo date("d M Y, H:i:s", mktime(10, 30, 59, 04, 21, 2016)); 
  echo "<br>";
  echo date("d M Y, H:i:s", strtotime("21-4-2016 10:30:59"));
  echo "<br>";
?>
</body>
</html>