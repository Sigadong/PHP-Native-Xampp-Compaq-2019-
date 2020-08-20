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
  else if ($user=="user"){
    echo "Selamat datang User";  
  }
  else if ($user=="guest"){
    echo "Selamat datang Tamu";  
  }
  else {
    echo "Maaf, saya tidak kenal anda";  
  }
?>
</body>
</html>