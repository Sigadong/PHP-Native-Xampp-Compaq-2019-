<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tanggal = strtotime("last day of next month");
  echo date("d F Y", $tanggal);  // 29 February 2016
  echo "<br>";
  
  $tanggal = strtotime("first sunday of Mar 2016");
  echo date("d F Y", $tanggal);  // 06 March 2016
  echo "<br>";
  
  $tanggal = strtotime("1 week ago");
  echo date("d F Y", $tanggal);  // 24 January 2016
  echo "<br>";
  
  $tanggal = strtotime("3 days ago");
  echo date("d F Y", $tanggal);  // 28 January 2016
  echo "<br>";
   
  $tanggal = strtotime("+1 week 2 days 4 hours 2 seconds");
  echo date("d F Y", $tanggal);  // 09 February 2016
  echo "<br>";
  
  $tanggal = strtotime("tomorrow");
  echo date("d F Y", $tanggal);  // 01 February 2016
?>
</body>
</html>