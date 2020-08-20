<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $koordinat = array(
                     array(8,2), 
                     array(2,4), 
                     array(1,7) 
                     );
  echo $koordinat[0][0]; // 8
  echo "<br>";
  echo $koordinat[0][1]; // 2
  echo "<br>";
  echo $koordinat[2][1]; // 7
  echo "<br>";
?>
</body>
</html>