<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array(
                 "satu"  => "Andri",
                 "dua"   => "Joko",
                 "tiga"  => "Sukma",
                 "empat" => "Rina"
                 );
  
  echo $siswa["dua"]; // Joko
  echo "<br>";
  echo $siswa["empat"]; // Rina
?> 
</body>
</html>