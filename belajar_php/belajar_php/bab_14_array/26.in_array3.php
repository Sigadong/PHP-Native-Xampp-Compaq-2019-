<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array(98, 59, 42, 65, 87, 66, 82, 49, 99);
  
  var_dump(in_array("66",$nilai));      // bool(true) 
  echo "<br>";
  var_dump(in_array("66",$nilai,true)); // bool(false) 
  echo "<br>";
  var_dump(in_array(66,$nilai,true));   // bool(true) 
?>
</body>
</html>