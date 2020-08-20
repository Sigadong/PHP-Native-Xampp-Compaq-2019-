<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $minggu_depan = time() + (7 * 24 * 60 * 60);
  echo $minggu_depan;   // 1454686985
  echo "<br>";
  
  $kemaren = time() - (1 * 24 * 60 * 60);
  echo $kemaren;        // 1453995785
?>
</body>
</html>