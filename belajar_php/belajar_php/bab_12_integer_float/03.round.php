<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo round(3.4);         // 3
  echo "<br>";
  echo round(3.5);         // 4
  echo "<br>";
  echo round(3.6);         // 4
  echo "<br>";
  echo round(3.6, 0);      // 4
  echo "<br>";
  echo round(1.95583, 2);  // 1.96
  echo "<br>";
  echo round(1241757, -3); // 1242000
  echo "<br>";
  echo round(5.045, 2);    // 5.05
  echo "<br>";
  echo round(5.055, 2);    // 5.06
?>
</body>
</html>