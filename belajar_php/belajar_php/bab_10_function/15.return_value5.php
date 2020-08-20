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
    echo "Kalimat ini tidak akan pernah dijalankan...";
  }
 
  echo tambah(5,7); // 12
?>
</body>
</html>