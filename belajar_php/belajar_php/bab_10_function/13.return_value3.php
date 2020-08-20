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
    return $hasil;
  }
  
  $a=tambah(6,10);
  $b=tambah($a,9);
  
  echo $b; // 25
?>
</body>
</html>
