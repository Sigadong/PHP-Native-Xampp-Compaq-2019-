<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function salam($nama){
    echo "<p>Selamat Pagi, $nama<p>";
  }
  
  salam("Andi");         // Selamat Pagi, Andi
  salam("Jojo");         // Selamat Pagi, Jojo
  salam("Indonesia");    // Selamat Pagi, Indonesia
  salam("Dunia...");     // Selamat Pagi, Dunia...
?>
</body>
</html>
