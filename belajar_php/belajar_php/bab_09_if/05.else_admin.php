<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $user="guest";
  
  if ($user=="admin"){
    echo "Selamat datang Admin!";  
  } 
  else {
    echo "Maaf, anda bukan Admin";  
  }
?>
</body>
</html>