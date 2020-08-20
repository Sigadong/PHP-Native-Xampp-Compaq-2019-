<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array(98, 59, 42, 65, 87, 66);
  $var = array_unshift($nilai, 82, 49, 99);
  
  echo $var; // 9
  print_r($nilai); 
  // Array ( [0] => 82 [1] => 49 [2] => 99 [3] => 98 [4] => 59 
  //         [5] => 42 [6] => 65 [7] => 87 [8] => 66 ) 
?>
</body>
</html>