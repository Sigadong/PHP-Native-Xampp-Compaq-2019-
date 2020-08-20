<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo floor(4.3);    // 4  
  echo "<br>";
  echo floor(9.999);  // 9
  echo "<br>";
  echo floor(-3.14);  // -4
  echo "<br>";
  var_dump( floor(array(4.2)) );  // bool(false) 
?>
</body>
</html>