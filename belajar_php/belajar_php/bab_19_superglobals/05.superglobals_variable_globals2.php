<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hari="Senin";
  
  function nama_hari(){
    $GLOBALS["hari"] = "Jum'at";  
  }
  
  // jalankan fungsi nama_hari()
  nama_hari();
  echo "Sekarang hari $hari";   // Sekarang hari Jum'at
?>
</body>
</html>