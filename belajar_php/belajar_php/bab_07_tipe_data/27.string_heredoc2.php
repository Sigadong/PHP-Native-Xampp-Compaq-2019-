<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
$bahasa="pemrograman PHP";
$kalimat = <<<"end"
Sedang belajar bahasa $bahasa, 
mohon jangan diganggu! lagi serius!!
end;
 
var_dump($kalimat);
// string(77) "Sedang belajar bahasa pemrograman PHP, 
// mohon jangan diganggu! lagi serius!!" 
?>
</body>
</html>