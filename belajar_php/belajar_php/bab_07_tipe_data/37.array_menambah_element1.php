<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $macam2 = array(121,"Joko",44.99,"Belajar PHP");
  $macam2[4] = "Duniailkom";
  $macam2[5] = 212;
  $macam2[6] = 3.14;
  
  echo "<pre>";
  print_r($macam2);
  echo "</pre>";
?>
</body>
</html>