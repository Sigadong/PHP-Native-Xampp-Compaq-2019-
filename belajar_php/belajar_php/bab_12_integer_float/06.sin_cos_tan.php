<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo sin(0.785398163397);       // 0.70710678118623 
  echo "<br>";                  
  echo sin(deg2rad(45));          // 0.70710678118623 
  echo "<br>";                    
  echo cos(deg2rad(60));          // 0.5 
  echo "<br>";                  
  echo tan(deg2rad(30));          // 0.57735026918963 
  echo "<br>";                  
  echo asin(0.70710678118623);    // 0.785398163397 
  echo "<br>";               
  echo acos(0.5);                 // 1.0471975511966  
  echo "<br>";            
  echo atan(0.57735026918963);    // 0.5235987755983 
?>
</body>
</html>