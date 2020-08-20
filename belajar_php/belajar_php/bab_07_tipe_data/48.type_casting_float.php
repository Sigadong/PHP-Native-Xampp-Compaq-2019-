<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $string_angka="9.75 kg obat";
  
  $string_angka = (float) $string_angka;
  var_dump($string_angka); // float(9.75) 
?>
</body>
</html>