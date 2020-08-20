<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a=100;
  
  function test(){
   global $a;
   $a=500;
   echo $a;
  }
  
  echo $a;      // 100
  echo "<br>";
  
  test();       // 500
  echo "<br>";
  
  echo $a;      // 500
  echo "<br>";
?>
</body>
</html>