<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="abcde";
  echo strlen($a); //5 
  echo "<br>";
  
  $b=" ab c d  e";
  echo strlen($b); //10 
  echo "<br>";
  
  $kalimat="Sedang dalam perjalanan menjadi seorang web programmer";
  echo strlen($kalimat); //54 
  echo "<br>";
  
  $kalimat="Sedang belajar PHP dari PHP Uncover";
  echo strlen($kalimat); //35 
?> 
</body>
</html>