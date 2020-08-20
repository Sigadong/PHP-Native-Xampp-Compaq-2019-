<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function tambah($satu,$dua){
    $hasil = $satu + $dua;
    echo $hasil;
  }
  
  tambah(6,10);   // 16
  echo "<br>";
  tambah(100,99); // 199 
?>
</body>
</html>
