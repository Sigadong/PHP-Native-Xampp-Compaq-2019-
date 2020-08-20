<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $hasil = preg_match("/@/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1
  
  $hasil = preg_match("/.+@.+/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1
  
  $hasil = preg_match("/.+@.+\..+/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1
?>
</body>
</html>