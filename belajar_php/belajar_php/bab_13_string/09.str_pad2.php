<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="a";
  echo str_pad($a,8,'#');     // 'a#######' 
  echo "<br>";
            
  $a="abc";                   
  echo str_pad($a,8,'#');     // 'abc#####' 
  echo "<br>";
             
  $a="abcde";                 
  echo str_pad($a,8,'#');     // 'abcde###' 
  echo "<br>";
              
  $a="abcdefghij";            
  echo str_pad($a,8,'#');     // 'abcdefghij'
?>
</body>
</html>