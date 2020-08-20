<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  
  $key = array_search("joko",$siswa);
  var_dump($key); // int(2)
  echo "<br>";
  
  $key = array_search("alex",$siswa);
  var_dump($key); // bool(false) 
?>
</body>
</html>