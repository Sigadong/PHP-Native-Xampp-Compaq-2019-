<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
$bahasa="pemrograman PHP";
$kalimat = <<<'selesai'
Sedang belajar bahasa $bahasa, 
mohon jangan diganggu! lagi serius!!
selesai;
 
var_dump($kalimat);
// string(69) "Sedang belajar bahasa $bahasa, 
// mohon jangan diganggu! lagi serius!!" 
?>
</body>
</html>