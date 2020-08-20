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
    return "Sekarang hari {$GLOBALS["hari"]}";
  }
  
  echo nama_hari()   // Sekarang hari Senin
?>
</body>
</html>