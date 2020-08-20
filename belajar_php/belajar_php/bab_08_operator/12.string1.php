<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hasil = "Belajar"."PHP";
  echo $hasil; // BelajarPHP
  echo "<br>";
  
  $a = "Sstt!";
  $b = " lagi";
  $c = " serius";
  $d = " belajar PHP";
  $hasil = $a.$b.$c.$d;
  echo $hasil; // Sstt! lagi serius belajar PHP
  echo "<br>";
  
  $hasil = 9 . " ekor anak beruang";
  echo $hasil;  // 9 ekor anak beruang
  echo "<br>";
  
  $hasil = true . " adalah data boolean";
  echo $hasil; // 1 adalah data boolean
?>
</body>
</html>