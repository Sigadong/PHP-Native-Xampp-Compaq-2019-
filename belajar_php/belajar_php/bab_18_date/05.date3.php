<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo date("jS F Y");                // 31st January 2016
  echo "<br>";                      
  echo date("l, jS F y ");            // Sunday, 31st January 16
  echo "<br>";                      
  echo date("H:i:s");                 // 02:03:00
  echo "<br>";                      
  echo date("d - m - Y, H:i:s");      // 31 - 01 - 2016, 02:03:00
  echo "<br>";                        
  echo date("j F Y, h:i:s A");        // 31 January 2016, 02:03:00 AM 
?>
</body>
</html>