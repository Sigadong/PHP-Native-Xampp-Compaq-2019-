<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $kalimat="Belajar PHP dari PHP Uncover";
  echo substr($kalimat,-5);       // cover 
  echo "<br>";
  echo substr($kalimat,-17);      // dari PHP Uncover 
  echo "<br>";
  echo substr($kalimat,-20,12);   // PHP dari PHP 
  echo "<br>";
  echo substr($kalimat,-20,-2);   // PHP dari PHP Uncov 
?>
</body>
</html>