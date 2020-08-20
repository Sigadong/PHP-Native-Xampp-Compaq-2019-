<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a=" abcd   ";
  echo strlen($a);         // 8 
  echo "<br>";
 
  $trim_a = trim($a);
  echo $trim_a;            // 'abcd'; 
  echo "<br>";
  echo strlen($trim_a);    // 4 
  echo "<br>";
  
  $ltrim_a = ltrim($a);
  echo $ltrim_a;           // 'abcd   '; 
  echo "<br>"; 
  echo "<br>";
  echo strlen($ltrim_a);   // 7
  
  $rtrim_a = rtrim($a);
  echo $rtrim_a;           // ' abcd'; 
  echo "<br>";
  echo strlen($rtrim_a);   // 5
?>
</body>
</html>