<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="aiueo";
  echo str_shuffle($a);   // eioua 
  echo "<br>";
  
  $a="abcde";
  echo str_shuffle($a);   // cdaeb 
  echo "<br>";
  
  $a="SedangBelajarPHP";
  echo str_shuffle($a);   // ePagBaSdrnjHPle 
  echo "<br>";

  $a="!#$%*&()_+";
  echo str_shuffle($a);   //  *&$(_)#%+!
?>
</body>
</html>