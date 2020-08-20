<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function test(){
   $a="variabel lokal";
  }
  
  test();
  echo $a; // Notice: Undefined variable: a
?>
</body>
</html>