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
  $ganti="CSS";
  $hasil=0;
  
  echo str_replace($cari,$ganti,$kalimat,$hasil); 
  // Belajar CSS dari CSS Uncover 
  echo "<br>";
  echo $hasil; // 2
?>
</body>
</html>