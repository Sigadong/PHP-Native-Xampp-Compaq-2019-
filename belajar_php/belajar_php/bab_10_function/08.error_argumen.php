<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function salam($waktu,$nama){
    echo "<p>Selamat $waktu, $nama </p>";
  }
  
  salam("Andi");    // Warning: Missing argument 2 for salam()
?>
</body>
</html>
