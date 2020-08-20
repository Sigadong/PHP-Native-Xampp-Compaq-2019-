<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  $cek = in_array("joko",$siswa);
  var_dump($cek); // bool(true) 
?>
</body>
</html>