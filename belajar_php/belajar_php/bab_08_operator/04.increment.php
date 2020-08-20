<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a = 5;
  echo ++$a;    // 6
  echo $a;      // 6
  echo "<br>";
    
  $b = 5;
  echo $b++;    // 5
  echo $b;      // 6
  echo "<br>";
  
  $a = 5;
  echo --$a;    // 4
  echo $a;      // 4
  echo "<br>";
    
  $b = 5;
  echo $b--;    // 5
  echo $b;      // 4
?>
</body>
</html>