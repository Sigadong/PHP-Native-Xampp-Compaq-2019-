<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
$siswa = array("andi", "gina", "joko", "santi");
  while ($satu_siswa = array_pop($siswa)) {
     echo $satu_siswa;
     echo "<br>";
  }
?>
</body>
</html>