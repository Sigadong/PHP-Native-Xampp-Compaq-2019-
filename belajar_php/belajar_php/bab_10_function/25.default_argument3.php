<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function salam($waktu="Malam", $nama="Anton"){
    echo "<p>Selamat $waktu, $nama </p>";
  }
  
  salam();                          // Selamat Malam, Anton
  salam("Pagi");                    // Selamat Pagi, Anton
  salam("Datang", "pak Presiden!"); // Selamat Datang, pak Presiden! 
?>
</body>
</html>