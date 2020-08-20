<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php  
  $hasil = preg_match("/[0-9]{5}/", "abcde");
  echo $hasil."<br>";    // 0
  
  $hasil = preg_match("/^[0-9]{5}$/", "12345");
  echo $hasil."<br>";    // 1
?>
</body>
</html>