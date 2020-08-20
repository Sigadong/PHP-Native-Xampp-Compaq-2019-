<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function salam($waktu, $nama){
    echo "<p>Selamat $waktu, $nama </p>";
  }
  
  salam("Malam","Andi");           // Selamat Malam, Andi
  salam("Siang","Jojo");           // Selamat Siang, Jojo
  salam("Pagi","Indonesia...");    // Selamat Pagi, Indonesia... 
?>
</body>
</html>
