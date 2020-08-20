<?php
  $password="rahasia";
  
  if ($password=="rahasia"){
    header("Location: admin.php"); 
  }
  else{
    header("Location: error.php"); 
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Belajar HTTP header</h1>
</body>
</html>