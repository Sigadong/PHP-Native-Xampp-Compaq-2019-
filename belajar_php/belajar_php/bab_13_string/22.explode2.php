<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $sumber="ab/cd/ef/gh/ij";
 
  $array_hasil=explode("/",$sumber); 
  print_r($array_hasil); 
  
  // Array ( [0] => ab [1] => cd [2] => ef [3] => gh [4] => ij ) 
?>
</body>
</html>