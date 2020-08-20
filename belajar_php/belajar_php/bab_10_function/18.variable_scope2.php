<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="variabel global";
  
  function test(){
   echo $a;
  }
  
  test(); // Notice: Undefined variable: a
?>
</body>
</html>