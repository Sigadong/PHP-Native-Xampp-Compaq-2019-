<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a="___1234_";
  
  echo trim($a,'_');    // '1234'; 
  echo "<br>";
  echo ltrim($a,'_');   // '1234_'; 
  echo "<br>";
  echo rtrim($a,'_');   // '___1234 '; 
  echo "<br>";

  $b="##-#Belajar PHP---##--";
  
  echo trim($b,'#-');   // 'Belajar PHP'; 
  echo "<br>";
  echo ltrim($b,'#-');  // 'Belajar PHP---##--'; 
  echo "<br>";
  echo rtrim($b,'#-');  // '##-#Belajar PHP ';  
?>
</body>
</html>