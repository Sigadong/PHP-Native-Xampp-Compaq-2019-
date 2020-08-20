<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  $key = array_search("andi",$siswa);
  
  if ($key!=false) {
      echo "Siswa ada di index ke $key";
  }
  else {
      echo "Siswa tidak ditemukan";
  }
?>
</body>
</html>