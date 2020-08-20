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
  
  salam("Pagi",null);   // Selamat Pagi,
  salam("","Joko");     // Selamat , Joko 
?>
</body>
</html>
