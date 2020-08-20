<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a = 13;
  $b = 0;
  @$hasil = $a/$b; 
  echo "Halaman ini terdapat error, tapi tidak ditampilkan.";
?>
</body>
</html>