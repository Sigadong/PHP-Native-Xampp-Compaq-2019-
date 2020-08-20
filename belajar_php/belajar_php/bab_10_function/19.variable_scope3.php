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
   $a=500;
   echo $a;
  }
  
  echo $a;       
  echo "<br>";
  
  test();        
  echo "<br>";
  
  echo $a;       
  echo "<br>";
?>
</body>
</html>