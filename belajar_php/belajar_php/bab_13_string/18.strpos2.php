<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $kalimat="Belajar PHP dari PHP Uncover";
  $cari="PHP";
  echo strpos($kalimat,$cari,9); // 17 
  echo "<br>";
  var_dump(strpos($kalimat,"CSS")); // bool(false)
?>
</body>
</html>