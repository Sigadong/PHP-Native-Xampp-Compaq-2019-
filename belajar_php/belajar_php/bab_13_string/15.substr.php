<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $kalimat="Belajar PHP dari PHP Uncover";
  
  echo substr($kalimat,3);      // ajar PHP dari PHP Uncover 
  echo "<br>";
  echo substr($kalimat,17);     // PHP Uncover 
  echo "<br>";
  echo substr($kalimat,3,4);    // ajar 
  echo "<br>";
  echo substr($kalimat,0,11);   // Belajar PHP
?>
</body>
</html>