<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $salah = TRUE;
  $tebak_angka = 8;
  
  while ($salah) {
    if ($tebak_angka==8) {
      $salah = FALSE;
      echo "<p>Anda benar!</p>";
    }
    else {
      echo "<p>Jawaban anda salah, silahkan ulangi kembali</p>";
    }
  }
?>
</body>
</html>