<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo round(9.5, 0, PHP_ROUND_HALF_UP);   // 10
  echo "<br>";
  echo round(9.5, 0, PHP_ROUND_HALF_DOWN); // 9
  echo "<br>";
  echo round(9.5, 0, PHP_ROUND_HALF_EVEN); // 10
  echo "<br>";
  echo round(9.5, 0, PHP_ROUND_HALF_ODD);  // 9
  echo "<br>";

  echo round(8.5, 0, PHP_ROUND_HALF_UP);   // 9
  echo "<br>";
  echo round(8.5, 0, PHP_ROUND_HALF_DOWN); // 8
  echo "<br>";
  echo round(8.5, 0, PHP_ROUND_HALF_EVEN); // 8
  echo "<br>";
  echo round(8.5, 0, PHP_ROUND_HALF_ODD);  // 9
?>
</body>
</html>