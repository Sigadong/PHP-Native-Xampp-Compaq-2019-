<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array(98, 59, 42, 65, 87, 66);
  $nilai[]=82;
  $nilai[]=49;
  $nilai[]=99;
  
  print_r($nilai); 
  // Array ( [0] => 98 [1] => 59 [2] => 42 [3] => 65 [4] => 87 
  //         [5] => 66 [6] => 82 [7] => 49 [8] => 99 ) 
?>
</body>
</html>