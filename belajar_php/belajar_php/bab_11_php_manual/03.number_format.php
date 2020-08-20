<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo number_format(12500);        // 12,500  
  echo "<br>";
  echo number_format(3250400);      // 3,250,400  
  echo "<br>";
  echo number_format(3250400,2);    // 3,250,400.00  
  echo "<br>";
  echo number_format(3.3333333,3);  // 3.333 
?>
</body>
</html>